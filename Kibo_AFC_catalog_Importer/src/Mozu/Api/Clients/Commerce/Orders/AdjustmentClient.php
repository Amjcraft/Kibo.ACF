<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Orders;

use Drupal\acf_kibo\Mozu\Api\MozuClient;
use Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Orders\AdjustmentUrl;


/**
* Use this subresource to manage ad-hoc order level price adjustments.
*/
class AdjustmentClient {

	/**
	* Updates the order handling adjustment.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @param Adjustment $adjustment 
	* @return MozuClient
	*/
	public static function applyHandlingAdjustmentClient($adjustment, $orderId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$url = AdjustmentUrl::applyHandlingAdjustmentUrl($orderId, $responseFields, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($adjustment);
		return $mozuClient;

	}
	
	/**
	* Applies a shipping adjustment to the specified order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param Adjustment $adjustment Properties of an ad-hoc price adjustment for an order.
	* @return MozuClient
	*/
	public static function applyShippingAdjustmentClient($adjustment, $orderId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$url = AdjustmentUrl::applyShippingAdjustmentUrl($orderId, $responseFields, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($adjustment);
		return $mozuClient;

	}
	
	/**
	* Applies a price adjustment to the specified order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param Adjustment $adjustment Properties of an ad-hoc price adjustment for an order.
	* @return MozuClient
	*/
	public static function applyAdjustmentClient($adjustment, $orderId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$url = AdjustmentUrl::applyAdjustmentUrl($orderId, $responseFields, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($adjustment);
		return $mozuClient;

	}
	
	/**
	* Removes an adjustment to the order handling fee.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @return MozuClient
	*/
	public static function removeHandlingAdjustmentClient($orderId, $updateMode =  null, $version =  null)
	{
		$url = AdjustmentUrl::removeHandlingAdjustmentUrl($orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Removes a shipping adjustment previously applied to an order or draft.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return MozuClient
	*/
	public static function removeShippingAdjustmentClient($orderId, $updateMode =  null, $version =  null)
	{
		$url = AdjustmentUrl::removeShippingAdjustmentUrl($orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Removes a price adjustment from the specified order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return MozuClient
	*/
	public static function removeAdjustmentClient($orderId, $updateMode =  null, $version =  null)
	{
		$url = AdjustmentUrl::removeAdjustmentUrl($orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

