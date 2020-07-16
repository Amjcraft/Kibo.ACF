<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Settings;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Settings\SiteShippingSettingsClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use the shipping subresource to manage settings for the site shipping information, such as origin address information, carrier shipping methods, shipping rate providers, and regions available for shipping.
*/
class SiteShippingSettingsResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of the shipping settings configured for a site.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return SiteShippingSettings 
	* @deprecated deprecated since version 1.17
	*/
	public function getSiteShippingSettings($responseFields =  null)
	{
		$mozuClient = SiteShippingSettingsClient::getSiteShippingSettingsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of the shipping settings configured for a site.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getSiteShippingSettingsAsync($responseFields =  null)
	{
		$mozuClient = SiteShippingSettingsClient::getSiteShippingSettingsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

