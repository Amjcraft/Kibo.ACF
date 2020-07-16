<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Shipping\Admin\Profiles;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Shipping\Admin\Profiles\ShippingStatesUrl;


/**
* Use the ShippingStates sub-resource to manage the states your shipping profile supports. For example, you can specify one of your shipping profiles to only support Texas, Oklahoma, Arkansas, Louisiana, and New Mexico.Each shipping state is composed of a user-definied code and name.
*/
class ShippingStatesClient {

	/**
	* Retrieves a list of shipping states and their details.
	*
	* @param string $profileCode The unique, user-defined code of the profile with which the shipping state is associated.
	* @return MozuClient
	*/
	public static function getStatesClient($profileCode)
	{
		$url = ShippingStatesUrl::getStatesUrl($profileCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Updates the details of the shipping states.
	*
	* @param string $profilecode The unique, user-defined code of the profile with which the shipping state is associated.
	* @param array|ShippingStates $states The updated details of the shipping states associated with the specified profilecode.
	* @return MozuClient
	*/
	public static function updateStatesClient($states, $profilecode)
	{
		$url = ShippingStatesUrl::updateStatesUrl($profilecode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($states);
		return $mozuClient;

	}
	
	
}

?>

