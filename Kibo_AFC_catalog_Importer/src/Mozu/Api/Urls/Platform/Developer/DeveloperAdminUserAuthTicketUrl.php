<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Platform\Developer;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class DeveloperAdminUserAuthTicketUrl  {

	/**
		* Get Resource Url for CreateDeveloperUserAuthTicket
		* @param int $developerAccountId Unique identifier of the developer account.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function createDeveloperUserAuthTicketUrl($developerAccountId, $responseFields)
	{
		$url = "/api/platform/developer/authtickets/?developerAccountId={developerAccountId}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("developerAccountId", $developerAccountId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RefreshDeveloperAuthTicket
		* @param int $developerAccountId Unique identifier of the developer account.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function refreshDeveloperAuthTicketUrl($developerAccountId, $responseFields)
	{
		$url = "/api/platform/developer/authtickets/?developerAccountId={developerAccountId}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("developerAccountId", $developerAccountId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteUserAuthTicket
		* @param string $refreshToken Alphanumeric string used for access tokens. This token refreshes access for accounts by generating a new developer or application account authentication ticket after an access token expires.
		* @return string Resource Url
	*/
	public static function deleteUserAuthTicketUrl($refreshToken)
	{
		$url = "/api/platform/developer/authtickets/?refreshToken={refreshToken}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("refreshToken", $refreshToken);
		return $mozuUrl;
	}
	
}

?>

