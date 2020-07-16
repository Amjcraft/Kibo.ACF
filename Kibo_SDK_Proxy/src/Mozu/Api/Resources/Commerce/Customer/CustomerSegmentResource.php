<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Customer;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Customer\CustomerSegmentClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use the Customer Segments resource to manage the segments that enable a client to manage groups of customers and target discounts for these segments. After a customer segment is defined, you can associate any number of customer accounts with it.
*/
class CustomerSegmentResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of defined customer segments according to any filter and sort criteria.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return CustomerSegmentCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getSegments($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CustomerSegmentClient::getSegmentsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of defined customer segments according to any filter and sort criteria.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getSegmentsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CustomerSegmentClient::getSegmentsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of the customer segment specified in the request. This operation does not return a list of the customer accounts associated with the segment.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CustomerSegment 
	* @deprecated deprecated since version 1.17
	*/
	public function getSegment($id, $responseFields =  null)
	{
		$mozuClient = CustomerSegmentClient::getSegmentClient($id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of the customer segment specified in the request. This operation does not return a list of the customer accounts associated with the segment.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getSegmentAsync($id, $responseFields =  null)
	{
		$mozuClient = CustomerSegmentClient::getSegmentClient($id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new customer segments. New customer segments do not have any associated customer accounts.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerSegment $segment The Customer Segment object includes properties of a defined customer segment used to group customer accounts.
	* @return CustomerSegment 
	* @deprecated deprecated since version 1.17
	*/
	public function addSegment($segment, $responseFields =  null)
	{
		$mozuClient = CustomerSegmentClient::addSegmentClient($segment, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new customer segments. New customer segments do not have any associated customer accounts.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function addSegmentAsync($segment, $responseFields =  null)
	{
		$mozuClient = CustomerSegmentClient::addSegmentClient($segment, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Adds one or more customer accounts to a defined customer segment.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @param array|int $accountIds List of customer account IDs to add to the customer segment specified in the request.
	* @deprecated deprecated since version 1.17
	*/
	public function addSegmentAccounts($accountIds, $id)
	{
		$mozuClient = CustomerSegmentClient::addSegmentAccountsClient($accountIds, $id);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Adds one or more customer accounts to a defined customer segment.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function addSegmentAccountsAsync($accountIds, $id)
	{
		$mozuClient = CustomerSegmentClient::addSegmentAccountsClient($accountIds, $id);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the details of the customer segment specified in the request.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerSegment $segment The Customer Segment object includes properties of a defined customer segment used to group customer accounts.
	* @return CustomerSegment 
	* @deprecated deprecated since version 1.17
	*/
	public function updateSegment($segment, $id, $responseFields =  null)
	{
		$mozuClient = CustomerSegmentClient::updateSegmentClient($segment, $id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the details of the customer segment specified in the request.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updateSegmentAsync($segment, $id, $responseFields =  null)
	{
		$mozuClient = CustomerSegmentClient::updateSegmentClient($segment, $id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes a customer segment specified by its unique identifier. Deleting a segment removes any customer account associations, but does not delete the customer account itself.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteSegment($id)
	{
		$mozuClient = CustomerSegmentClient::deleteSegmentClient($id);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes a customer segment specified by its unique identifier. Deleting a segment removes any customer account associations, but does not delete the customer account itself.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function deleteSegmentAsync($id)
	{
		$mozuClient = CustomerSegmentClient::deleteSegmentClient($id);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Removes single account from a segment.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @deprecated deprecated since version 1.17
	*/
	public function removeSegmentAccount($id, $accountId)
	{
		$mozuClient = CustomerSegmentClient::removeSegmentAccountClient($id, $accountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Removes single account from a segment.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function removeSegmentAccountAsync($id, $accountId)
	{
		$mozuClient = CustomerSegmentClient::removeSegmentAccountClient($id, $accountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

