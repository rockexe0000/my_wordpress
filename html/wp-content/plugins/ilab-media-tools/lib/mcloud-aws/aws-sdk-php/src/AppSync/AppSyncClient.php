<?php

namespace MediaCloud\Vendor\Aws\AppSync;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS AppSync** service.
 * @method \MediaCloud\Vendor\Aws\Result associateApi(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateApiAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createApiCache(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createApiCacheAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createApiKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createApiKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDataSource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDataSourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDomainName(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDomainNameAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createFunction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createFunctionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createGraphqlApi(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createGraphqlApiAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createResolver(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createResolverAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createType(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createTypeAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteApiCache(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteApiCacheAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteApiKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteApiKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDataSource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDataSourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDomainName(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDomainNameAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteFunction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteFunctionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteGraphqlApi(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteGraphqlApiAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteResolver(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteResolverAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteType(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteTypeAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateApi(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateApiAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result flushApiCache(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise flushApiCacheAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getApiAssociation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getApiAssociationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getApiCache(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getApiCacheAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDataSource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDataSourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDomainName(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDomainNameAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getFunction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getFunctionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getGraphqlApi(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getGraphqlApiAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getIntrospectionSchema(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getIntrospectionSchemaAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getResolver(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getResolverAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSchemaCreationStatus(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSchemaCreationStatusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getType(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTypeAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listApiKeys(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listApiKeysAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDataSources(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDataSourcesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDomainNames(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDomainNamesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listFunctions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listFunctionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listGraphqlApis(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listGraphqlApisAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listResolvers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listResolversAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listResolversByFunction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listResolversByFunctionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTypes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTypesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startSchemaCreation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startSchemaCreationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateApiCache(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateApiCacheAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateApiKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateApiKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDataSource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDataSourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDomainName(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDomainNameAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateFunction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateFunctionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateGraphqlApi(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateGraphqlApiAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateResolver(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateResolverAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateType(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateTypeAsync(array $args = [])
 */
class AppSyncClient extends AwsClient {}
