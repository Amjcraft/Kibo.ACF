<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Drupal\acf_kibo\Mozu\Api\MozuClient;
use Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypeOptionUrl;

use Drupal\acf_kibo\Mozu\Api\Headers;

/**
* Use the Options subresource to define how an option attribute is used for a specific product type. Product attribute definitions are unique for each associated product type.
*/
class ProductTypeOptionClient {

	/**
	* Retrieves a list of option product attributes defined for the specified product type.
	*
	* @param int $productTypeId Identifier of the product type.
	* @return MozuClient
	*/
	public static function getOptionsClient($dataViewMode, $productTypeId)
	{
		$url = ProductTypeOptionUrl::getOptionsUrl($productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of an option attribute defined for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getOptionClient($dataViewMode, $productTypeId, $attributeFQN, $responseFields =  null)
	{
		$url = ProductTypeOptionUrl::getOptionUrl($attributeFQN, $productTypeId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Assigns an option attribute to the product type based on the information supplied in the request.
	*
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeInProductType $attributeInProductType Properties of an attribute definition associated with a specific product type. When an attribute is applied to a product type, each product of that type maintains the same set of attributes.
	* @return MozuClient
	*/
	public static function addOptionClient($dataViewMode, $attributeInProductType, $productTypeId, $responseFields =  null)
	{
		$url = ProductTypeOptionUrl::addOptionUrl($productTypeId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attributeInProductType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updates an option attribute definition for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeInProductType $attributeInProductType Properties of an attribute definition associated with a specific product type. When an attribute is applied to a product type, each product of that type maintains the same set of attributes.
	* @return MozuClient
	*/
	public static function updateOptionClient($dataViewMode, $attributeInProductType, $productTypeId, $attributeFQN, $responseFields =  null)
	{
		$url = ProductTypeOptionUrl::updateOptionUrl($attributeFQN, $productTypeId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attributeInProductType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Removes an option attribute definition for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	*/
	public static function deleteOptionClient($dataViewMode, $productTypeId, $attributeFQN)
	{
		$url = ProductTypeOptionUrl::deleteOptionUrl($attributeFQN, $productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	
}

?>

