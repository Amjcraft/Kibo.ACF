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
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Orders\PackageUrl;


/**
* Use the Packages subresource to manage the physical packages to ship for an order.
*/
class PackageClient {

	/**
	* Retrieves a list of the actions available to perform for a package associated with order fulfillment.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $packageId Unique identifier of the package for which to retrieve the label.
	* @return MozuClient
	*/
	public static function getAvailablePackageFulfillmentActionsClient($orderId, $packageId)
	{
		$url = PackageUrl::getAvailablePackageFulfillmentActionsUrl($orderId, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the package label image supplied by the carrier.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $packageId Unique identifier of the package for which to retrieve the label.
	* @return MozuClient
	*/
	public static function getPackageLabelClient($orderId, $packageId)
	{
		$url = PackageUrl::getPackageLabelUrl($orderId, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a package of order items.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $packageId Unique identifier of the package for which to retrieve the label.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getPackageClient($orderId, $packageId, $responseFields =  null)
	{
		$url = PackageUrl::getPackageUrl($orderId, $packageId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new physical package of order items.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Package $package Properties of a physical package shipped for an order.
	* @return MozuClient
	*/
	public static function createPackageClient($pkg, $orderId, $responseFields =  null)
	{
		$url = PackageUrl::createPackageUrl($orderId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($pkg);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a physical package of order items.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $packageId Unique identifier of the package for which to retrieve the label.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Package $package Properties of a physical package shipped for an order.
	* @return MozuClient
	*/
	public static function updatePackageClient($pkg, $orderId, $packageId, $responseFields =  null)
	{
		$url = PackageUrl::updatePackageUrl($orderId, $packageId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($pkg);
		return $mozuClient;

	}
	
	/**
	* Removes a physical package of items from the specified order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $packageId Unique identifier of the package for which to retrieve the label.
	*/
	public static function deletePackageClient($orderId, $packageId)
	{
		$url = PackageUrl::deletePackageUrl($orderId, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

