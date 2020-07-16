<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Settings;

use Drupal\acf_kibo\Mozu\Api\MozuClient;
use Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Settings\SiteShippingSettingsUrl;


/**
* Use the shipping subresource to manage settings for the site shipping information, such as origin address information, carrier shipping methods, shipping rate providers, and regions available for shipping.
*/
class SiteShippingSettingsClient {

	/**
	* Retrieves a list of the shipping settings configured for a site.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getSiteShippingSettingsClient($responseFields =  null)
	{
		$url = SiteShippingSettingsUrl::getSiteShippingSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

