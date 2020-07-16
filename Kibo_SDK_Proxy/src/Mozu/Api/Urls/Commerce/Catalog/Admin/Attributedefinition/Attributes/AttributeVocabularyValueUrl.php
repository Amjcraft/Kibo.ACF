<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Attributes;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuUrl;
use Drupal\kibo_sdk_proxy\Mozu\Api\UrlLocation;

class AttributeVocabularyValueUrl  {

	/**
		* Get Resource Url for GetAttributeVocabularyValues
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @return string Resource Url
	*/
	public static function getAttributeVocabularyValuesUrl($attributeFQN)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAttributeVocabularyValueLocalizedContents
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function getAttributeVocabularyValueLocalizedContentsUrl($attributeFQN, $value)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues/{value}/LocalizedContent";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAttributeVocabularyValueLocalizedContent
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function getAttributeVocabularyValueLocalizedContentUrl($attributeFQN, $localeCode, $responseFields, $value)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues/{value}/LocalizedContent/{localeCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("localeCode", $localeCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAttributeVocabularyValue
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function getAttributeVocabularyValueUrl($attributeFQN, $responseFields, $value)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues/{value}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddAttributeVocabularyValueLocalizedContent
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function addAttributeVocabularyValueLocalizedContentUrl($attributeFQN, $responseFields, $value)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues/{value}/localizedContent?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddAttributeVocabularyValue
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function addAttributeVocabularyValueUrl($attributeFQN, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateAttributeVocabularyValues
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @return string Resource Url
	*/
	public static function updateAttributeVocabularyValuesUrl($attributeFQN)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateAttributeVocabularyValueLocalizedContents
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function updateAttributeVocabularyValueLocalizedContentsUrl($attributeFQN, $value)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues/{value}/LocalizedContent";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateAttributeVocabularyValueLocalizedContent
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $localeCode The two character country code that sets the locale, such as US for United States. Sites, tenants, and catalogs use locale codes for localizing content, such as translated product text per supported country.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function updateAttributeVocabularyValueLocalizedContentUrl($attributeFQN, $localeCode, $responseFields, $value)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues/{value}/LocalizedContent/{localeCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("localeCode", $localeCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateAttributeVocabularyValue
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function updateAttributeVocabularyValueUrl($attributeFQN, $responseFields, $value)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues/{value}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteAttributeVocabularyValue
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function deleteAttributeVocabularyValueUrl($attributeFQN, $value)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues/{value}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteAttributeVocabularyValueLocalizedContent
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function deleteAttributeVocabularyValueLocalizedContentUrl($attributeFQN, $localeCode, $value)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues/{value}/LocalizedContent/{localeCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("localeCode", $localeCode);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
}

?>

