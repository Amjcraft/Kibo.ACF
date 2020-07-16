<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Platform;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Platform\ReferenceDataUrl;


/**
* The Reference resource retrieves collections of standards the  system currently supports. This includes content locales, top-level domains, units of measure, countries, currencies, time zones, and shipping or billing address schemas.
*/
class ReferenceDataClient {

	/**
	* Retrieves a specific address schema based on the country code provided. This operation allows the creation of custom shipping and billing address fields.
	*
	* @param string $countryCode The 2-letter geographic code representing the country for the physical or mailing address. Currently limited to the US.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getAddressSchemaClient($countryCode =  null, $responseFields =  null)
	{
		$url = ReferenceDataUrl::getAddressSchemaUrl($countryCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the entire list of address schemas that the system supports.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getAddressSchemasClient($responseFields =  null)
	{
		$url = ReferenceDataUrl::getAddressSchemasUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a behavior based on the behavior ID specified in the request.
	*
	* @param int $behaviorId Unique identifier of the behavior.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getBehaviorClient($behaviorId, $responseFields =  null)
	{
		$url = ReferenceDataUrl::getBehaviorUrl($behaviorId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the behavior category specified in the request.
	*
	* @param int $categoryId Unique identifier of the category to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getBehaviorCategoryClient($categoryId, $responseFields =  null)
	{
		$url = ReferenceDataUrl::getBehaviorCategoryUrl($categoryId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the list of behavior categories.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getBehaviorCategoriesClient($responseFields =  null)
	{
		$url = ReferenceDataUrl::getBehaviorCategoriesUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of application behaviors.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userType The user type associated with the behaviors to retrieve.
	* @return MozuClient
	*/
	public static function getBehaviorsClient($userType =  null, $responseFields =  null)
	{
		$url = ReferenceDataUrl::getBehaviorsUrl($responseFields, $userType);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the list of content locales the system supports. Content locales indicate the language used and the country where the language is used.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getContentLocalesClient($responseFields =  null)
	{
		$url = ReferenceDataUrl::getContentLocalesUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the entire list of countries that the system supports.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getCountriesClient($responseFields =  null)
	{
		$url = ReferenceDataUrl::getCountriesUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the entire list of countries that the system supports.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return MozuClient
	*/
	public static function getCountriesWithStatesClient($responseFields =  null)
	{
		$url = ReferenceDataUrl::getCountriesWithStatesUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the entire list of currencies that the system supports.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getCurrenciesClient($responseFields =  null)
	{
		$url = ReferenceDataUrl::getCurrenciesUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the entire list of time zones that the system supports.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getTimeZonesClient($responseFields =  null)
	{
		$url = ReferenceDataUrl::getTimeZonesUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the entire list of top-level internet domains that the system supports.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getTopLevelDomainsClient($responseFields =  null)
	{
		$url = ReferenceDataUrl::getTopLevelDomainsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves an array list of all units of measure the system supports.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getUnitsOfMeasureClient($filter =  null, $responseFields =  null)
	{
		$url = ReferenceDataUrl::getUnitsOfMeasureUrl($filter, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

