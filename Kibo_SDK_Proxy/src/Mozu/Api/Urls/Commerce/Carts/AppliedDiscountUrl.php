<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Carts;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuUrl;
use Drupal\kibo_sdk_proxy\Mozu\Api\UrlLocation;

class AppliedDiscountUrl  {

	/**
		* Get Resource Url for ApplyCoupon
		* @param string $cartId Identifier of the cart to delete.
		* @param string $couponCode Code associated with the coupon to remove from the cart.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function applyCouponUrl($cartId, $couponCode, $responseFields)
	{
		$url = "/api/commerce/carts/{cartId}/coupons/{couponCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("cartId", $cartId);
		$url = $mozuUrl->formatUrl("couponCode", $couponCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RemoveCoupons
		* @param string $cartId Identifier of the cart to delete.
		* @return string Resource Url
	*/
	public static function removeCouponsUrl($cartId)
	{
		$url = "/api/commerce/carts/{cartId}/coupons";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("cartId", $cartId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RemoveCoupon
		* @param string $cartId Identifier of the cart to delete.
		* @param string $couponCode Code associated with the coupon to remove from the cart.
		* @return string Resource Url
	*/
	public static function removeCouponUrl($cartId, $couponCode)
	{
		$url = "/api/commerce/carts/{cartId}/coupons/{couponcode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("cartId", $cartId);
		$url = $mozuUrl->formatUrl("couponCode", $couponCode);
		return $mozuUrl;
	}
	
}

?>

