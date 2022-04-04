<?php

namespace MediaCloud\Vendor\Aws\MediaConvert;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaConvert** service.
 * @method \MediaCloud\Vendor\Aws\Result associateCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createJobTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createJobTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPreset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPresetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createQueue(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createQueueAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteJobTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteJobTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePreset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePresetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteQueue(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteQueueAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeEndpoints(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeEndpointsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getJobTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getJobTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPreset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPresetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getQueue(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getQueueAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listJobTemplates(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listJobTemplatesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPresets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPresetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listQueues(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listQueuesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateJobTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateJobTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updatePreset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updatePresetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateQueue(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateQueueAsync(array $args = [])
 */
class MediaConvertClient extends AwsClient {}
