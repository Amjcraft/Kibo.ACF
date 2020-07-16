<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Catalog\Admin;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Catalog\Admin\CouponSetUrl;


/**
* Use the Coupon Sets resource to view and create coupon sets. You can use coupon sets to group multiple coupon codes together and associate them with one or more discounts. Use the  subresource to manage the coupon codes within manual coupon sets. Use the  subresource to mange the discounts assigned to coupon sets.
*/
class CouponSetClient {

	/**
	* Retrieves a list of coupon sets in the catalog according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param bool $includeCounts Specifies whether to include the number of redeemed coupons, existing coupon codes, and assigned discounts in the response body.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return MozuClient
	*/
	public static function getCouponSetsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $includeCounts =  null, $responseFields =  null)
	{
		$url = CouponSetUrl::getCouponSetsUrl($filter, $includeCounts, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a single coupon set. Use the couponSetCode parameter to specify the coupon set. Use the includeCounts parameter to specify whether to include the number of redeemed coupons, existing coupon codes, and assigned discounts.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @param bool $includeCounts Specifies whether to include the number of redeemed coupons, existing coupon codes, and assigned discounts in the response body.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return MozuClient
	*/
	public static function getCouponSetClient($couponSetCode, $includeCounts =  null, $responseFields =  null)
	{
		$url = CouponSetUrl::getCouponSetUrl($couponSetCode, $includeCounts, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Returns a unique, random four character code to use for the couponSetCode.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return MozuClient
	*/
	public static function getUniqueCouponSetCodeClient($responseFields =  null)
	{
		$url = CouponSetUrl::getUniqueCouponSetCodeUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds a single coupon set to the catalog.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CouponSet $couponSet The details of the new coupon set.
	* @return MozuClient
	*/
	public static function addCouponSetClient($couponSet, $responseFields =  null)
	{
		$url = CouponSetUrl::addCouponSetUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($couponSet);
		return $mozuClient;

	}
	
	/**
	* Validates the couponSetCode and tests it for uniqueness.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	*/
	public static function validateUniqueCouponSetCodeClient($code)
	{
		$url = CouponSetUrl::validateUniqueCouponSetCodeUrl($code);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a coupon set in the catalog.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CouponSet $couponSet The details of the updated coupon set.
	* @return MozuClient
	*/
	public static function updateCouponSetClient($couponSet, $couponSetCode, $responseFields =  null)
	{
		$url = CouponSetUrl::updateCouponSetUrl($couponSetCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($couponSet);
		return $mozuClient;

	}
	
	/**
	* Deletes a specified coupon set from the catalog. Use the couponSetCode parameter to specify the coupon set to delete.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	*/
	public static function deleteCouponSetClient($couponSetCode)
	{
		$url = CouponSetUrl::deleteCouponSetUrl($couponSetCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

