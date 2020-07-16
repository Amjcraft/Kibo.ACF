<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Orders;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class OrderNoteUrl  {

	/**
		* Get Resource Url for GetOrderNotes
		* @param string $orderId Unique identifier of the order.
		* @return string Resource Url
	*/
	public static function getOrderNotesUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/notes";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetOrderNote
		* @param string $noteId Unique identifier of a particular note to retrieve.
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getOrderNoteUrl($noteId, $orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/notes/{noteId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("noteId", $noteId);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateOrderNote
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function createOrderNoteUrl($orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/notes?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateOrderNote
		* @param string $noteId Unique identifier of a particular note to retrieve.
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateOrderNoteUrl($noteId, $orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/notes/{noteId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("noteId", $noteId);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteOrderNote
		* @param string $noteId Unique identifier of a particular note to retrieve.
		* @param string $orderId Unique identifier of the order.
		* @return string Resource Url
	*/
	public static function deleteOrderNoteUrl($noteId, $orderId)
	{
		$url = "/api/commerce/orders/{orderId}/notes/{noteId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("noteId", $noteId);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
}

?>

