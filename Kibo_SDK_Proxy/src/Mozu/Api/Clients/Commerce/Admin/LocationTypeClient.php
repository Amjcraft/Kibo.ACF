<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Admin;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Admin\LocationTypeUrl;


/**
* Use the Location Types resource to manage the types of locations your tenant maintains, such as warehouses, physical storefronts, and kiosks.
*/
class LocationTypeClient {

	/**
	* Retrieve a list of all location types defined for the tenant.
	*
	* @return MozuClient
	*/
	public static function getLocationTypesClient()
	{
		$url = LocationTypeUrl::getLocationTypesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the location type specified in the request.
	*
	* @param string $locationTypeCode The user-defined code that identifies the location type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getLocationTypeClient($locationTypeCode, $responseFields =  null)
	{
		$url = LocationTypeUrl::getLocationTypeUrl($locationTypeCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new location type based on the information specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param LocationType $locationType Properties of a type of physical location, such as warehouse or kiosk. Location types enable tenants to group similar locations for filtering and location usage type definition.
	* @return MozuClient
	*/
	public static function addLocationTypeClient($locationType, $responseFields =  null)
	{
		$url = LocationTypeUrl::addLocationTypeUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($locationType);
		return $mozuClient;

	}
	
	/**
	* Updates the name of a defined location type.
	*
	* @param string $locationTypeCode The user-defined code that identifies the location type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param LocationType $locationType Properties of a type of physical location, such as warehouse or kiosk. Location types enable tenants to group similar locations for filtering and location usage type definition.
	* @return MozuClient
	*/
	public static function updateLocationTypeClient($locationType, $locationTypeCode, $responseFields =  null)
	{
		$url = LocationTypeUrl::updateLocationTypeUrl($locationTypeCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($locationType);
		return $mozuClient;

	}
	
	/**
	* Deletes the location type specified in the request.
	*
	* @param string $locationTypeCode The user-defined code that identifies the location type.
	*/
	public static function deleteLocationTypeClient($locationTypeCode)
	{
		$url = LocationTypeUrl::deleteLocationTypeUrl($locationTypeCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

