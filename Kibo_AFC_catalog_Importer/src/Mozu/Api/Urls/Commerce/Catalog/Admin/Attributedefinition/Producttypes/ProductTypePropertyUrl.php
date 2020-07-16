<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class ProductTypePropertyUrl  {

	/**
		* Get Resource Url for GetProperties
		* @param int $productTypeId Identifier of the product type.
		* @return string Resource Url
	*/
	public static function getPropertiesUrl($productTypeId)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}/Properties";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("productTypeId", $productTypeId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProperty
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param int $productTypeId Identifier of the product type.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getPropertyUrl($attributeFQN, $productTypeId, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}/Properties/{attributeFQN}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productTypeId", $productTypeId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddProperty
		* @param int $productTypeId Identifier of the product type.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function addPropertyUrl($productTypeId, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}/Properties?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("productTypeId", $productTypeId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateProperty
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param int $productTypeId Identifier of the product type.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updatePropertyUrl($attributeFQN, $productTypeId, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}/Properties/{attributeFQN}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productTypeId", $productTypeId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteProperty
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param int $productTypeId Identifier of the product type.
		* @return string Resource Url
	*/
	public static function deletePropertyUrl($attributeFQN, $productTypeId)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}/Properties/{attributeFQN}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productTypeId", $productTypeId);
		return $mozuUrl;
	}
	
}

?>

