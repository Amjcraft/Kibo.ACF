<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Payments;

use Drupal\acf_kibo\Mozu\Api\MozuClient;
use Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Payments\FraudScreenUrl;


/**
* commerce/payments/fraudscreen related resources. DOCUMENT_HERE 
*/
class FraudScreenClient {

	/**
	* payments-fraudscreen Post Screen description DOCUMENT_HERE 
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param FraudScreenRequest $request Mozu.PaymentService.Contracts.Request.FraudScreenRequest ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function screenClient($request, $responseFields =  null)
	{
		$url = FraudScreenUrl::screenUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($request);
		return $mozuClient;

	}
	
	
}

?>

