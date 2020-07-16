<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Clients\Commerce;

use Drupal\acf_kibo\Mozu\Api\MozuClient;
use Drupal\acf_kibo\Mozu\Api\Urls\Commerce\TargetRuleUrl;


/**
* Use the TargetRules resource to manage your target rules for products and zones. For example, you can set specific rules that dictate shipping options for specific products.
*/
class TargetRuleClient {

	/**
	* Retrieves a list of target rules and their details according to any specified facets, filter criteria, and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return MozuClient
	*/
	public static function getTargetRulesClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = TargetRuleUrl::getTargetRulesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the specified target rule.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return MozuClient
	*/
	public static function getTargetRuleClient($code, $responseFields =  null)
	{
		$url = TargetRuleUrl::getTargetRuleUrl($code, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new target rule.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param TargetRule $targetRule The details of the new target rule.
	* @return MozuClient
	*/
	public static function createTargetRuleClient($targetRule, $responseFields =  null)
	{
		$url = TargetRuleUrl::createTargetRuleUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($targetRule);
		return $mozuClient;

	}
	
	/**
	* Validates the details of a target rule.
	*
	* @param TargetRule $targetRule The details of the target rule you want to validate.
	*/
	public static function validateTargetRuleClient($targetRule)
	{
		$url = TargetRuleUrl::validateTargetRuleUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($targetRule);
		return $mozuClient;

	}
	
	/**
	* Updates the details of the specified target rule.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param TargetRule $targetRule The details of the updated target rule.
	* @return MozuClient
	*/
	public static function updateTargetRuleClient($targetRule, $code, $responseFields =  null)
	{
		$url = TargetRuleUrl::updateTargetRuleUrl($code, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($targetRule);
		return $mozuClient;

	}
	
	/**
	* Deletes the specified target rule.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	*/
	public static function deleteTargetRuleClient($code)
	{
		$url = TargetRuleUrl::deleteTargetRuleUrl($code);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

