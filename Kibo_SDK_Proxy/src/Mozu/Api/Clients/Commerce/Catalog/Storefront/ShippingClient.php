<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Catalog\Storefront;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Catalog\Storefront\ShippingUrl;


/**
* Use the Storefront Shipping resource to retrieve shipping rate information from the website.
*/
class ShippingClient {

	/**
	* Retrieves the shipping rates applicable for the site.
	*
	* @param bool $includeRawResponse Set this parameter to  to retrieve the full raw JSON response from a shipping carrier (instead of just the shipping rate).
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param RateRequest $rateRequest Properties required to request a shipping rate calculation.
	* @return MozuClient
	*/
	public static function getRatesClient($rateRequest, $includeRawResponse =  null, $responseFields =  null)
	{
		$url = ShippingUrl::getRatesUrl($includeRawResponse, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($rateRequest);
		return $mozuClient;

	}
	
	
}

?>

