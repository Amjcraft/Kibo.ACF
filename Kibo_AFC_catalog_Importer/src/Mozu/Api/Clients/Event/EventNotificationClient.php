<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Clients\Event;

use Drupal\acf_kibo\Mozu\Api\MozuClient;
use Drupal\acf_kibo\Mozu\Api\Urls\Event\EventNotificationUrl;


/**
* Events are notifications  publishes to the application when a create, read, update, or delete operation is performed. If the application subscribes to the event, you can use the Events resource to query for recent events  published to your application or events that were not published successfully.
*/
class EventNotificationClient {

	/**
	* Retrieves a list of events.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getEventsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = EventNotificationUrl::getEventsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves an event by providing the event ID.
	*
	* @param string $eventId The unique identifier of the event being retrieved. An event is a notification about a create, read, update, or delete on an order, product, discount or category.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getEventClient($eventId, $responseFields =  null)
	{
		$url = EventNotificationUrl::getEventUrl($eventId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

