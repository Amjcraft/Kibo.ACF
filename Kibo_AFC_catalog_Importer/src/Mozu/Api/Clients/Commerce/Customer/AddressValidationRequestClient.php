<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Customer;

use Drupal\acf_kibo\Mozu\Api\MozuClient;
use Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Customer\AddressValidationRequestUrl;


/**
* Use the Address Validation resource to validate addresses associated with a customer account contact.
*/
class AddressValidationRequestClient {

	/**
	* Validates the customer address supplied in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AddressValidationRequest $addressValidationRequest Properties of the address used for validation of the account's full address. This content may include multiple lines of an address, city, state/province, zip/postal code, and country.
	* @return MozuClient
	*/
	public static function validateAddressClient($addressValidationRequest, $responseFields =  null)
	{
		$url = AddressValidationRequestUrl::validateAddressUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($addressValidationRequest);
		return $mozuClient;

	}
	
	
}

?>

