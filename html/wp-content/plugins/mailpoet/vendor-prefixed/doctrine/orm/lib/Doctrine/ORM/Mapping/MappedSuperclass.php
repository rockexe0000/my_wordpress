<?php
declare (strict_types=1);
namespace MailPoetVendor\Doctrine\ORM\Mapping;
if (!defined('ABSPATH')) exit;
use Attribute;
use MailPoetVendor\Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor;
#[\Attribute(Attribute::TARGET_CLASS)]
final class MappedSuperclass implements Annotation
{
 public $repositoryClass;
 public function __construct(?string $repositoryClass = null)
 {
 $this->repositoryClass = $repositoryClass;
 }
}
