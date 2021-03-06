<?php

namespace MediaCloud\Vendor\Aws\MediaLive;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaLive** service.
 * @method \MediaCloud\Vendor\Aws\Result acceptInputDeviceTransfer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise acceptInputDeviceTransferAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchDelete(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchDeleteAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchStart(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchStartAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchStop(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchStopAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchUpdateSchedule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchUpdateScheduleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelInputDeviceTransfer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelInputDeviceTransferAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result claimDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise claimDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createInput(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createInputAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createInputSecurityGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createInputSecurityGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createMultiplex(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createMultiplexAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createMultiplexProgram(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createMultiplexProgramAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPartnerInput(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPartnerInputAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteInput(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteInputAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteInputSecurityGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteInputSecurityGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteMultiplex(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteMultiplexAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteMultiplexProgram(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteMultiplexProgramAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteReservation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteReservationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSchedule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteScheduleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeInput(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeInputAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeInputDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeInputDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeInputDeviceThumbnail(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeInputDeviceThumbnailAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeInputSecurityGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeInputSecurityGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeMultiplex(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeMultiplexAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeMultiplexProgram(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeMultiplexProgramAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeOffering(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeOfferingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeReservation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeReservationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSchedule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeScheduleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listChannels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listChannelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInputDeviceTransfers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInputDeviceTransfersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInputDevices(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInputDevicesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInputSecurityGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInputSecurityGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInputs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInputsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMultiplexPrograms(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMultiplexProgramsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMultiplexes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMultiplexesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listOfferings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listOfferingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listReservations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listReservationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result purchaseOffering(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise purchaseOfferingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result rejectInputDeviceTransfer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise rejectInputDeviceTransferAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startMultiplex(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startMultiplexAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopMultiplex(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopMultiplexAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result transferInputDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise transferInputDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateChannelClass(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateChannelClassAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateInput(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateInputAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateInputDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateInputDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateInputSecurityGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateInputSecurityGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateMultiplex(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateMultiplexAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateMultiplexProgram(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateMultiplexProgramAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateReservation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateReservationAsync(array $args = [])
 */
class MediaLiveClient extends AwsClient {}
