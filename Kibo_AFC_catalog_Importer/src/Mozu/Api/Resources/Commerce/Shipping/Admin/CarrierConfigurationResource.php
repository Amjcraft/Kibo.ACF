<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Commerce\Shipping\Admin;

use Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Shipping\Admin\CarrierConfigurationClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;


/**
* Use the Carriers resource to configure and manage your supported shipping carrier configurations.
*/
class CarrierConfigurationResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of carrier configurations and their details according to any specified facets, filter criteria, and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return CarrierConfigurationCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getConfigurations($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::getConfigurationsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of carrier configurations and their details according to any specified facets, filter criteria, and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getConfigurationsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::getConfigurationsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of the specified carrier configuration.
	*
	* @param string $carrierId The unique identifier of the carrier.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return CarrierConfiguration 
	* @deprecated deprecated since version 1.17
	*/
	public function getConfiguration($carrierId, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::getConfigurationClient($carrierId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of the specified carrier configuration.
	*
	* @param string $carrierId The unique identifier of the carrier.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getConfigurationAsync($carrierId, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::getConfigurationClient($carrierId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new carrier configuration.
	*
	* @param string $carrierId The unique identifier of the carrier.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CarrierConfiguration $carrierConfiguration Properties of a carrier configured in the shipping admin.
	* @return CarrierConfiguration 
	* @deprecated deprecated since version 1.17
	*/
	public function createConfiguration($carrierConfiguration, $carrierId, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::createConfigurationClient($carrierConfiguration, $carrierId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new carrier configuration.
	*
	* @param string $carrierId The unique identifier of the carrier.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function createConfigurationAsync($carrierConfiguration, $carrierId, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::createConfigurationClient($carrierConfiguration, $carrierId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the details of the specified carrier configuration.
	*
	* @param string $carrierId The unique identifier of the carrier.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CarrierConfiguration $carrierConfiguration Properties of a carrier configured in the shipping admin.
	* @return CarrierConfiguration 
	* @deprecated deprecated since version 1.17
	*/
	public function updateConfiguration($carrierConfiguration, $carrierId, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::updateConfigurationClient($carrierConfiguration, $carrierId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the details of the specified carrier configuration.
	*
	* @param string $carrierId The unique identifier of the carrier.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function updateConfigurationAsync($carrierConfiguration, $carrierId, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::updateConfigurationClient($carrierConfiguration, $carrierId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the specified carrier configuration.
	*
	* @param string $carrierId The unique identifier of the carrier configuration.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteConfiguration($carrierId)
	{
		$mozuClient = CarrierConfigurationClient::deleteConfigurationClient($carrierId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the specified carrier configuration.
	*
	* @param string $carrierId The unique identifier of the carrier configuration.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function deleteConfigurationAsync($carrierId)
	{
		$mozuClient = CarrierConfigurationClient::deleteConfigurationClient($carrierId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

