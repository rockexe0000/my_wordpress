<?php

namespace MediaCloud\Vendor\Aws\mgn;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Application Migration Service** service.
 * @method \MediaCloud\Vendor\Aws\Result changeServerLifeCycleState(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise changeServerLifeCycleStateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createReplicationConfigurationTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createReplicationConfigurationTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteReplicationConfigurationTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteReplicationConfigurationTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSourceServer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSourceServerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteVcenterClient(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteVcenterClientAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeJobLogItems(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeJobLogItemsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeReplicationConfigurationTemplates(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeReplicationConfigurationTemplatesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSourceServers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSourceServersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeVcenterClients(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeVcenterClientsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disconnectFromService(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disconnectFromServiceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result finalizeCutover(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise finalizeCutoverAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getLaunchConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getLaunchConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getReplicationConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getReplicationConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result initializeService(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise initializeServiceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result markAsArchived(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise markAsArchivedAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result retryDataReplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise retryDataReplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startCutover(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startCutoverAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startReplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startReplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startTest(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startTestAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result terminateTargetInstances(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise terminateTargetInstancesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateLaunchConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateLaunchConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateReplicationConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateReplicationConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateReplicationConfigurationTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateReplicationConfigurationTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSourceServerReplicationType(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSourceServerReplicationTypeAsync(array $args = [])
 */
class mgnClient extends AwsClient {}
