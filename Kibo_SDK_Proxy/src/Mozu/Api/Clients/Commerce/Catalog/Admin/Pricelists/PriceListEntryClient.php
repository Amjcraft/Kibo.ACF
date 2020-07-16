<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Catalog\Admin\Pricelists;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Catalog\Admin\Pricelists\PriceListEntryUrl;


/**
* Use the Entries sub-resource to interact with price list entries. Price list entries enable you to override product pricing as well as control what products shoppers can view and purchase when the price list is exclusive. Refer to the [Price Lists](../../../guides/catalog/price-lists.htm) guides topic for more information.
*/
class PriceListEntryClient {

	/**
	* Retrieves the details of a price list entry.
	*
	* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
	* @param string $priceListCode The unique code of the price list associated with the price list entry.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param DateTime $startDate The start date of the price list entry.
	* @return MozuClient
	*/
	public static function getPriceListEntryClient($priceListCode, $productCode, $currencyCode, $startDate =  null, $responseFields =  null)
	{
		$url = PriceListEntryUrl::getPriceListEntryUrl($currencyCode, $priceListCode, $productCode, $responseFields, $startDate);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of price list entries associated with the specified price list according to any specified facets, filter criteria, and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $priceListCode The unique code of the price list associated with the price list entry.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return MozuClient
	*/
	public static function getPriceListEntriesClient($priceListCode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = PriceListEntryUrl::getPriceListEntriesUrl($filter, $pageSize, $priceListCode, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds a new price list entry to the specified price list.
	*
	* @param string $priceListCode The specified price list to which you want to add the price list entry.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param PriceListEntry $priceListEntryIn The details of the new price list entry.
	* @return MozuClient
	*/
	public static function addPriceListEntryClient($priceListEntryIn, $priceListCode, $responseFields =  null)
	{
		$url = PriceListEntryUrl::addPriceListEntryUrl($priceListCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($priceListEntryIn);
		return $mozuClient;

	}
	
	/**
	* Updates the details of a price list entry.
	*
	* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
	* @param string $priceListCode The unique code of the price list associated with the price list entry.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param DateTime $startDate The start date of the price list entry.
	* @param PriceListEntry $priceListEntryIn The updated details of the price list entry.
	* @return MozuClient
	*/
	public static function updatePriceListEntryClient($priceListEntryIn, $priceListCode, $productCode, $currencyCode, $startDate =  null, $responseFields =  null)
	{
		$url = PriceListEntryUrl::updatePriceListEntryUrl($currencyCode, $priceListCode, $productCode, $responseFields, $startDate);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($priceListEntryIn);
		return $mozuClient;

	}
	
	/**
	* Deletes a price list entry.
	*
	* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
	* @param string $priceListCode The code of the specified price list associated with the price list entry.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param DateTime $startDate The start date of the price list entry.
	*/
	public static function deletePriceListEntryClient($priceListCode, $productCode, $currencyCode, $startDate =  null)
	{
		$url = PriceListEntryUrl::deletePriceListEntryUrl($currencyCode, $priceListCode, $productCode, $startDate);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

