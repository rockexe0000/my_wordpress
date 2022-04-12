<?php
namespace MailPoetVendor\Symfony\Component\Validator\Mapping\Factory;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Psr\Cache\CacheItemPoolInterface;
use MailPoetVendor\Symfony\Component\Validator\Exception\NoSuchMetadataException;
use MailPoetVendor\Symfony\Component\Validator\Mapping\Cache\CacheInterface;
use MailPoetVendor\Symfony\Component\Validator\Mapping\ClassMetadata;
use MailPoetVendor\Symfony\Component\Validator\Mapping\Loader\LoaderInterface;
class LazyLoadingMetadataFactory implements MetadataFactoryInterface
{
 protected $loader;
 protected $cache;
 protected $loadedClasses = [];
 public function __construct(LoaderInterface $loader = null, $cache = null)
 {
 if ($cache instanceof CacheInterface) {
 @\trigger_error(\sprintf('Passing a "%s" to "%s" is deprecated in Symfony 4.4 and will trigger a TypeError in 5.0. Please pass an implementation of "%s" instead.', \get_class($cache), __METHOD__, CacheItemPoolInterface::class), \E_USER_DEPRECATED);
 } elseif (!$cache instanceof CacheItemPoolInterface && null !== $cache) {
 throw new \TypeError(\sprintf('Expected an instance of "%s", got "%s".', CacheItemPoolInterface::class, \is_object($cache) ? \get_class($cache) : \gettype($cache)));
 }
 $this->loader = $loader;
 $this->cache = $cache;
 }
 public function getMetadataFor($value)
 {
 if (!\is_object($value) && !\is_string($value)) {
 throw new NoSuchMetadataException(\sprintf('Cannot create metadata for non-objects. Got: "%s".', \gettype($value)));
 }
 $class = \ltrim(\is_object($value) ? \get_class($value) : $value, '\\');
 if (isset($this->loadedClasses[$class])) {
 return $this->loadedClasses[$class];
 }
 if (!\class_exists($class) && !\interface_exists($class, \false)) {
 throw new NoSuchMetadataException(\sprintf('The class or interface "%s" does not exist.', $class));
 }
 $cacheItem = null;
 if ($this->cache instanceof CacheInterface) {
 if ($metadata = $this->cache->read($class)) {
 // Include constraints from the parent class
 $this->mergeConstraints($metadata);
 return $this->loadedClasses[$class] = $metadata;
 }
 } elseif (null !== $this->cache) {
 $cacheItem = $this->cache->getItem($this->escapeClassName($class));
 if ($cacheItem->isHit()) {
 $metadata = $cacheItem->get();
 // Include constraints from the parent class
 $this->mergeConstraints($metadata);
 return $this->loadedClasses[$class] = $metadata;
 }
 }
 $metadata = new ClassMetadata($class);
 if (null !== $this->loader) {
 $this->loader->loadClassMetadata($metadata);
 }
 if ($this->cache instanceof CacheInterface) {
 $this->cache->write($metadata);
 } elseif (null !== $cacheItem) {
 $this->cache->save($cacheItem->set($metadata));
 }
 // Include constraints from the parent class
 $this->mergeConstraints($metadata);
 return $this->loadedClasses[$class] = $metadata;
 }
 private function mergeConstraints(ClassMetadata $metadata)
 {
 if ($metadata->getReflectionClass()->isInterface()) {
 return;
 }
 // Include constraints from the parent class
 if ($parent = $metadata->getReflectionClass()->getParentClass()) {
 $metadata->mergeConstraints($this->getMetadataFor($parent->name));
 }
 // Include constraints from all directly implemented interfaces
 foreach ($metadata->getReflectionClass()->getInterfaces() as $interface) {
 if ('Symfony\\Component\\Validator\\GroupSequenceProviderInterface' === $interface->name) {
 continue;
 }
 if ($parent && \in_array($interface->getName(), $parent->getInterfaceNames(), \true)) {
 continue;
 }
 $metadata->mergeConstraints($this->getMetadataFor($interface->name));
 }
 }
 public function hasMetadataFor($value)
 {
 if (!\is_object($value) && !\is_string($value)) {
 return \false;
 }
 $class = \ltrim(\is_object($value) ? \get_class($value) : $value, '\\');
 return \class_exists($class) || \interface_exists($class, \false);
 }
 private function escapeClassName(string $class) : string
 {
 if (\str_contains($class, '@')) {
 // anonymous class: replace all PSR6-reserved characters
 return \str_replace(["\x00", '\\', '/', '@', ':', '{', '}', '(', ')'], '.', $class);
 }
 return \str_replace('\\', '.', $class);
 }
}
