<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Platform;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class ApplicationUrl  {

	/**
		* Get Resource Url for GetAppPackageNames
		* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getAppPackageNamesUrl($applicationKey, $responseFields)
	{
		$url = "/api/platform/developer/applications/{applicationKey}/packagenames?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("applicationKey", $applicationKey);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAppVersions
		* @param string $nsAndAppId The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getAppVersionsUrl($nsAndAppId, $responseFields)
	{
		$url = "/api/platform/developer/applications/versions/{nsAndAppId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("nsAndAppId", $nsAndAppId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetPackageFileMetadata
		* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
		* @param string $filepath Represents the file name and location.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getPackageFileMetadataUrl($applicationKey, $filepath, $responseFields)
	{
		$url = "/api/platform/developer/packages/{applicationKey}/filemetadata/{filepath}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("applicationKey", $applicationKey);
		$url = $mozuUrl->formatUrl("filepath", $filepath);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetPackageMetadata
		* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getPackageMetadataUrl($applicationKey, $responseFields)
	{
		$url = "/api/platform/developer/packages/{applicationKey}/metadata?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("applicationKey", $applicationKey);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpsertPackageFile
		* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
		* @param string $filepath The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
		* @param string $lastModifiedTime The date and time of the last file insert or update. This parameter is optional.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function upsertPackageFileUrl($applicationKey, $filepath, $lastModifiedTime, $responseFields)
	{
		$url = "/api/platform/developer/packages/{applicationKey}/files/{filepath}?lastModifiedTime={lastModifiedTime}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("applicationKey", $applicationKey);
		$url = $mozuUrl->formatUrl("filepath", $filepath);
		$url = $mozuUrl->formatUrl("lastModifiedTime", $lastModifiedTime);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RenamePackageFile
		* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function renamePackageFileUrl($applicationKey, $responseFields)
	{
		$url = "/api/platform/developer/packages/{applicationKey}/files_rename?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("applicationKey", $applicationKey);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeletePackageFile
		* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
		* @param string $filepath Represents the file name and location.
		* @return string Resource Url
	*/
	public static function deletePackageFileUrl($applicationKey, $filepath)
	{
		$url = "/api/platform/developer/packages/{applicationKey}/files/{filepath}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("applicationKey", $applicationKey);
		$url = $mozuUrl->formatUrl("filepath", $filepath);
		return $mozuUrl;
	}
	
}

?>

