<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Orders;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Orders\OrderValidationResultUrl;


/**
* Manage the results of order validation.
*/
class OrderValidationResultClient {

	/**
	* Retrieves a list of the validation results associated with the order.
	*
	* @param string $orderId Unique identifier of the order.
	* @return MozuClient
	*/
	public static function getValidationResultsClient($orderId)
	{
		$url = OrderValidationResultUrl::getValidationResultsUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Add a new order validation result to a submitted order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param OrderValidationResult $validationResult Properties of the resulting order validation performed by an order validation capability.
	* @return MozuClient
	*/
	public static function addValidationResultClient($validationResult, $orderId, $responseFields =  null)
	{
		$url = OrderValidationResultUrl::addValidationResultUrl($orderId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($validationResult);
		return $mozuClient;

	}
	
	
}

?>

