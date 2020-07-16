<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Commerce\Catalog\Storefront;

use Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Catalog\Storefront\ShippingClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;


/**
* Use the Storefront Shipping resource to retrieve shipping rate information from the website.
*/
class ShippingResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves the shipping rates applicable for the site.
	*
	* @param bool $includeRawResponse Set this parameter to  to retrieve the full raw JSON response from a shipping carrier (instead of just the shipping rate).
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param RateRequest $rateRequest Properties required to request a shipping rate calculation.
	* @return RatesResponse 
	* @deprecated deprecated since version 1.17
	*/
	public function getRates($rateRequest, $includeRawResponse =  null, $responseFields =  null)
	{
		$mozuClient = ShippingClient::getRatesClient($rateRequest, $includeRawResponse, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the shipping rates applicable for the site.
	*
	* @param bool $includeRawResponse Set this parameter to  to retrieve the full raw JSON response from a shipping carrier (instead of just the shipping rate).
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getRatesAsync($rateRequest, $includeRawResponse =  null, $responseFields =  null)
	{
		$mozuClient = ShippingClient::getRatesClient($rateRequest, $includeRawResponse, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

