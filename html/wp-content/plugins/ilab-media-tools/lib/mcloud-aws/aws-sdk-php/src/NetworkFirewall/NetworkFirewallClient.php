<?php

namespace MediaCloud\Vendor\Aws\NetworkFirewall;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Network Firewall** service.
 * @method \MediaCloud\Vendor\Aws\Result associateFirewallPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateFirewallPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateSubnets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateSubnetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createFirewall(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createFirewallAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createFirewallPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createFirewallPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRuleGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRuleGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteFirewall(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteFirewallAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteFirewallPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteFirewallPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteResourcePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRuleGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRuleGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeFirewall(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeFirewallAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeFirewallPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeFirewallPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeLoggingConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeLoggingConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeResourcePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeResourcePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeRuleGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeRuleGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeRuleGroupMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeRuleGroupMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateSubnets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateSubnetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listFirewallPolicies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listFirewallPoliciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listFirewalls(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listFirewallsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRuleGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRuleGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putResourcePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateFirewallDeleteProtection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateFirewallDeleteProtectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateFirewallDescription(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateFirewallDescriptionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateFirewallPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateFirewallPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateFirewallPolicyChangeProtection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateFirewallPolicyChangeProtectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateLoggingConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateLoggingConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRuleGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRuleGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSubnetChangeProtection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSubnetChangeProtectionAsync(array $args = [])
 */
class NetworkFirewallClient extends AwsClient {}
