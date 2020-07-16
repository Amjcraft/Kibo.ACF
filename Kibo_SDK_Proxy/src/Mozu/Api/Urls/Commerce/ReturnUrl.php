<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuUrl;
use Drupal\kibo_sdk_proxy\Mozu\Api\UrlLocation;

class ReturnUrl  {

	/**
		* Get Resource Url for GetReturns
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $q A list of order search terms (not phrases) to use in the query when searching across order number and the name or email of the billing contact. When entering, separate multiple search terms with a space character.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
		* @return string Resource Url
	*/
	public static function getReturnsUrl($filter, $pageSize, $q, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/returns/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&q={q}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("q", $q);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAvailableReturnActions
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function getAvailableReturnActionsUrl($returnId)
	{
		$url = "/api/commerce/returns/{returnId}/actions";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetReturnItem
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @param string $returnItemId Unique identifier of the return item whose details you want to get.
		* @return string Resource Url
	*/
	public static function getReturnItemUrl($responseFields, $returnId, $returnItemId)
	{
		$url = "/api/commerce/returns/{returnId}/items/{returnItemId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		$url = $mozuUrl->formatUrl("returnItemId", $returnItemId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetReturnItems
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function getReturnItemsUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/items?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAvailablePaymentActionsForReturn
		* @param string $paymentId Unique identifier of the payment for which to perform the action.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function getAvailablePaymentActionsForReturnUrl($paymentId, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments/{paymentId}/actions";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("paymentId", $paymentId);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetPayment
		* @param string $paymentId Unique identifier of the payment for which to perform the action.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function getPaymentUrl($paymentId, $responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments/{paymentId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("paymentId", $paymentId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetPayments
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function getPaymentsUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetReturn
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function getReturnUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetReasons
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getReasonsUrl($responseFields)
	{
		$url = "/api/commerce/returns/reasons?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateReturn
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function createReturnUrl($responseFields)
	{
		$url = "/api/commerce/returns/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateReturnItem
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function createReturnItemUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/items?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for PerformPaymentActionForReturn
		* @param string $paymentId Unique identifier of the payment for which to perform the action.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function performPaymentActionForReturnUrl($paymentId, $responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments/{paymentId}/actions?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("paymentId", $paymentId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreatePaymentActionForReturn
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function createPaymentActionForReturnUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments/actions?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateReturnShippingOrder
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function createReturnShippingOrderUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/ship?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for PerformReturnActions
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function performReturnActionsUrl($responseFields)
	{
		$url = "/api/commerce/returns/actions?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateReturn
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function updateReturnUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ResendReturnEmail
		* @return string Resource Url
	*/
	public static function resendReturnEmailUrl()
	{
		$url = "/api/commerce/returns/email/resend";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteOrderItem
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @param string $returnItemId Unique identifier of the return item whose details you want to get.
		* @return string Resource Url
	*/
	public static function deleteOrderItemUrl($returnId, $returnItemId)
	{
		$url = "/api/commerce/returns/{orderId}/items/{orderItemId}?updatemode={updateMode}&version={version}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		$url = $mozuUrl->formatUrl("returnItemId", $returnItemId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteReturn
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function deleteReturnUrl($returnId)
	{
		$url = "/api/commerce/returns/{returnId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
}

?>

