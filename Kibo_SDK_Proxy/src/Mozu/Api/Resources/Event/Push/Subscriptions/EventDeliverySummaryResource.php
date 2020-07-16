<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Event\Push\Subscriptions;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Event\Push\Subscriptions\EventDeliverySummaryClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Provides details for each attempted delivery of the event to the endpoint.
*/
class EventDeliverySummaryResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* This operation method is the external/public event entity used specifically in pull/poll event scenarios.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $subscriptionId Unique identifier for a subscription, such as subscribing tenants for an event or to receive a notification.
	* @return EventDeliverySummary 
	* @deprecated deprecated since version 1.17
	*/
	public function getDeliveryAttemptSummary($subscriptionId, $id =  null, $responseFields =  null)
	{
		$mozuClient = EventDeliverySummaryClient::getDeliveryAttemptSummaryClient($subscriptionId, $id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* This operation method is the external/public event entity used specifically in pull/poll event scenarios.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $subscriptionId Unique identifier for a subscription, such as subscribing tenants for an event or to receive a notification.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getDeliveryAttemptSummaryAsync($subscriptionId, $id =  null, $responseFields =  null)
	{
		$mozuClient = EventDeliverySummaryClient::getDeliveryAttemptSummaryClient($subscriptionId, $id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a collection of data for delivery attempts of events and notifications. These are notifications sent to subscribing sites and tenants. A paged list is returned sorted and filtered per the entered parameters.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @param string $subscriptionId Unique identifier for a subscription, such as subscribing tenants for an event or to receive a notification.
	* @return EventDeliverySummaryCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getDeliveryAttemptSummaries($subscriptionId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = EventDeliverySummaryClient::getDeliveryAttemptSummariesClient($subscriptionId, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a collection of data for delivery attempts of events and notifications. These are notifications sent to subscribing sites and tenants. A paged list is returned sorted and filtered per the entered parameters.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @param string $subscriptionId Unique identifier for a subscription, such as subscribing tenants for an event or to receive a notification.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getDeliveryAttemptSummariesAsync($subscriptionId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = EventDeliverySummaryClient::getDeliveryAttemptSummariesClient($subscriptionId, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

