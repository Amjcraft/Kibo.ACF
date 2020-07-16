<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypePropertyClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;

use Drupal\kibo_sdk_proxy\Mozu\Api\Headers;

/**
* Use the Properties subresource to define how property product attributes are used for a specific product type. Product attribute definitions are unique for each associated product type.
*/
class ProductTypePropertyResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Retrieves a list of product property attributes defined for a product type.
	*
	* @param int $productTypeId Identifier of the product type.
	* @return array|AttributeInProductType 
	* @deprecated deprecated since version 1.17
	*/
	public function getProperties($productTypeId)
	{
		$mozuClient = ProductTypePropertyClient::getPropertiesClient($this->dataViewMode, $productTypeId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of product property attributes defined for a product type.
	*
	* @param int $productTypeId Identifier of the product type.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getPropertiesAsync($productTypeId)
	{
		$mozuClient = ProductTypePropertyClient::getPropertiesClient($this->dataViewMode, $productTypeId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a product property attribute definition for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return AttributeInProductType 
	* @deprecated deprecated since version 1.17
	*/
	public function getProperty($productTypeId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductTypePropertyClient::getPropertyClient($this->dataViewMode, $productTypeId, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a product property attribute definition for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getPropertyAsync($productTypeId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductTypePropertyClient::getPropertyClient($this->dataViewMode, $productTypeId, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Assigns a property attribute to the specified product type, according to the information defined in the request.
	*
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeInProductType $attributeInProductType Properties of an attribute definition associated with a specific product type. When an attribute is applied to a product type, each product of that type maintains the same set of attributes.
	* @return AttributeInProductType 
	* @deprecated deprecated since version 1.17
	*/
	public function addProperty($attributeInProductType, $productTypeId, $responseFields =  null)
	{
		$mozuClient = ProductTypePropertyClient::addPropertyClient($this->dataViewMode, $attributeInProductType, $productTypeId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Assigns a property attribute to the specified product type, according to the information defined in the request.
	*
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function addPropertyAsync($attributeInProductType, $productTypeId, $responseFields =  null)
	{
		$mozuClient = ProductTypePropertyClient::addPropertyClient($this->dataViewMode, $attributeInProductType, $productTypeId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the definition of a property attribute for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeInProductType $attributeInProductType Properties of an attribute definition associated with a specific product type. When an attribute is applied to a product type, each product of that type maintains the same set of attributes.
	* @return AttributeInProductType 
	* @deprecated deprecated since version 1.17
	*/
	public function updateProperty($attributeInProductType, $productTypeId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductTypePropertyClient::updatePropertyClient($this->dataViewMode, $attributeInProductType, $productTypeId, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the definition of a property attribute for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updatePropertyAsync($attributeInProductType, $productTypeId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductTypePropertyClient::updatePropertyClient($this->dataViewMode, $attributeInProductType, $productTypeId, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Removes a property attribute previously defined for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteProperty($productTypeId, $attributeFQN)
	{
		$mozuClient = ProductTypePropertyClient::deletePropertyClient($this->dataViewMode, $productTypeId, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Removes a property attribute previously defined for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function deletePropertyAsync($productTypeId, $attributeFQN)
	{
		$mozuClient = ProductTypePropertyClient::deletePropertyClient($this->dataViewMode, $productTypeId, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

