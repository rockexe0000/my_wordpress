<?php

namespace MediaCloud\Vendor\Aws\DirectoryService;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * AWS Directory Service client
 *
 * @method \MediaCloud\Vendor\Aws\Result acceptSharedDirectory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise acceptSharedDirectoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result addIpRoutes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addIpRoutesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result addRegion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addRegionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result addTagsToResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelSchemaExtension(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelSchemaExtensionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result connectDirectory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise connectDirectoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAlias(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createComputer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createComputerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createConditionalForwarder(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createConditionalForwarderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDirectory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDirectoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createLogSubscription(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createLogSubscriptionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createMicrosoftAD(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createMicrosoftADAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSnapshot(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createTrust(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createTrustAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteConditionalForwarder(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteConditionalForwarderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDirectory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDirectoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteLogSubscription(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteLogSubscriptionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSnapshot(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSnapshotAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteTrust(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteTrustAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deregisterCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deregisterCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deregisterEventTopic(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deregisterEventTopicAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeClientAuthenticationSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeClientAuthenticationSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeConditionalForwarders(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeConditionalForwardersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDirectories(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDirectoriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDomainControllers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDomainControllersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeEventTopics(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeEventTopicsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeLDAPSSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeLDAPSSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeRegions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeRegionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSharedDirectories(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSharedDirectoriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSnapshots(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSnapshotsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeTrusts(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeTrustsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disableClientAuthentication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disableClientAuthenticationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disableLDAPS(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disableLDAPSAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disableRadius(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disableRadiusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disableSso(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disableSsoAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result enableClientAuthentication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise enableClientAuthenticationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result enableLDAPS(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise enableLDAPSAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result enableRadius(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise enableRadiusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result enableSso(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise enableSsoAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDirectoryLimits(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDirectoryLimitsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSnapshotLimits(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSnapshotLimitsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listCertificates(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listCertificatesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listIpRoutes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listIpRoutesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listLogSubscriptions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listLogSubscriptionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSchemaExtensions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSchemaExtensionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result registerCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise registerCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result registerEventTopic(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise registerEventTopicAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result rejectSharedDirectory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise rejectSharedDirectoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeIpRoutes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeIpRoutesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeRegion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeRegionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeTagsFromResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result resetUserPassword(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise resetUserPasswordAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result restoreFromSnapshot(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise restoreFromSnapshotAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result shareDirectory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise shareDirectoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startSchemaExtension(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startSchemaExtensionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result unshareDirectory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise unshareDirectoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateConditionalForwarder(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateConditionalForwarderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateNumberOfDomainControllers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateNumberOfDomainControllersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRadius(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRadiusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateTrust(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateTrustAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result verifyTrust(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise verifyTrustAsync(array $args = [])
 */
class DirectoryServiceClient extends AwsClient {}
