<?php

namespace MediaCloud\Vendor\Aws\CloudWatchEvidently;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch Evidently** service.
 * @method \MediaCloud\Vendor\Aws\Result batchEvaluateFeature(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchEvaluateFeatureAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createExperiment(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createExperimentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createFeature(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createFeatureAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createLaunch(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createLaunchAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createProject(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteExperiment(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteExperimentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteFeature(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteFeatureAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteLaunch(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteLaunchAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteProject(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result evaluateFeature(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise evaluateFeatureAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getExperiment(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getExperimentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getExperimentResults(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getExperimentResultsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getFeature(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getFeatureAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getLaunch(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getLaunchAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getProject(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getProjectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listExperiments(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listExperimentsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listFeatures(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listFeaturesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listLaunches(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listLaunchesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listProjects(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putProjectEvents(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putProjectEventsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startExperiment(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startExperimentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startLaunch(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startLaunchAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopExperiment(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopExperimentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopLaunch(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopLaunchAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateExperiment(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateExperimentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateFeature(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateFeatureAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateLaunch(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateLaunchAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateProject(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateProjectDataDelivery(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateProjectDataDeliveryAsync(array $args = [])
 */
class CloudWatchEvidentlyClient extends AwsClient {}
