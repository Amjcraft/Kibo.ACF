<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Customer;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class CustomerAuthTicketUrl  {

	/**
		* Get Resource Url for CreateAnonymousShopperAuthTicket
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function createAnonymousShopperAuthTicketUrl($responseFields)
	{
		$url = "/api/commerce/customer/authtickets/anonymousshopper?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateUserAuthTicket
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function createUserAuthTicketUrl($responseFields)
	{
		$url = "/api/commerce/customer/authtickets/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RefreshUserAuthTicket
		* @param string $refreshToken Alphanumeric string used for access tokens. This token refreshes access for accounts by generating a new developer or application account authentication ticket after an access token expires.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function refreshUserAuthTicketUrl($refreshToken, $responseFields)
	{
		$url = "/api/commerce/customer/authtickets/refresh?refreshToken={refreshToken}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("refreshToken", $refreshToken);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
}

?>

