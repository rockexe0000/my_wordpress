<?php

namespace MediaCloud\Vendor\Aws\Rekognition;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Rekognition** service.
 * @method \MediaCloud\Vendor\Aws\Result compareFaces(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise compareFacesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createCollection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createCollectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDataset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDatasetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createProject(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createProjectVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createProjectVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createStreamProcessor(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createStreamProcessorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteCollection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteCollectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDataset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDatasetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteFaces(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteFacesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteProject(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteProjectVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteProjectVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteStreamProcessor(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteStreamProcessorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeCollection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeCollectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDataset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDatasetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeProjectVersions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeProjectVersionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeProjects(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeProjectsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeStreamProcessor(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeStreamProcessorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result detectCustomLabels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise detectCustomLabelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result detectFaces(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise detectFacesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result detectLabels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise detectLabelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result detectModerationLabels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise detectModerationLabelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result detectProtectiveEquipment(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise detectProtectiveEquipmentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result detectText(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise detectTextAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result distributeDatasetEntries(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise distributeDatasetEntriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCelebrityInfo(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCelebrityInfoAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCelebrityRecognition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCelebrityRecognitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getContentModeration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getContentModerationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getFaceDetection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getFaceDetectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getFaceSearch(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getFaceSearchAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getLabelDetection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getLabelDetectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPersonTracking(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPersonTrackingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSegmentDetection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSegmentDetectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTextDetection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTextDetectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result indexFaces(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise indexFacesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listCollections(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listCollectionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDatasetEntries(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDatasetEntriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDatasetLabels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDatasetLabelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listFaces(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listFacesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listStreamProcessors(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listStreamProcessorsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result recognizeCelebrities(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise recognizeCelebritiesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result searchFaces(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise searchFacesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result searchFacesByImage(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise searchFacesByImageAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startCelebrityRecognition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startCelebrityRecognitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startContentModeration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startContentModerationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startFaceDetection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startFaceDetectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startFaceSearch(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startFaceSearchAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startLabelDetection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startLabelDetectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startPersonTracking(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startPersonTrackingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startProjectVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startProjectVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startSegmentDetection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startSegmentDetectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startStreamProcessor(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startStreamProcessorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startTextDetection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startTextDetectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopProjectVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopProjectVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopStreamProcessor(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopStreamProcessorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDatasetEntries(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDatasetEntriesAsync(array $args = [])
 */
class RekognitionClient extends AwsClient {}