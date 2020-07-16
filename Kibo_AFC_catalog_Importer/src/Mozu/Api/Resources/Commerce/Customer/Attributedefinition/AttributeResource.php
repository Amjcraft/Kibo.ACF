<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Commerce\Customer\Attributedefinition;

use Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Customer\Attributedefinition\AttributeClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;


/**
* Attributes are used to add custom definitions and characteristics to the following objects:
*  — are attributes that define the characteristics of products, enabling you to uniquely describe a product. They consist of options, properties, and extras. Refer to [Product Attributes](https://www.mozu.com/docs/guides/catalog/product-attributes.htm) in the Guides section for more information.

*  — are custom attributes that you can apply to customer accounts to add further definition for special uses, such as marketing campaigns, or discounts. Refer to [Customer Attributes](https://www.mozu.com/docs/guides/customers/customers.htm#customer_attributes) in the Guides section for more information.

*  — are custom attributes that enable you to uniquely describe an aspect of an order. Depending on the attribute definition, either you or a shopper can enter values for the order attribute. Refer to [Order Attributes](https://www.mozu.com/docs/guides/orders/order-attributes.htm) in the Guides section for more information.

*/
class AttributeResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a paged list of attributes according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return AttributeCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getAttributes($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = AttributeClient::getAttributesClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a paged list of attributes according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getAttributesAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = AttributeClient::getAttributesClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieve a list of the vocabulary values defined for the customer attribute specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @return array|AttributeVocabularyValue 
	* @deprecated deprecated since version 1.17
	*/
	public function getAttributeVocabularyValues($attributeFQN)
	{
		$mozuClient = AttributeClient::getAttributeVocabularyValuesClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieve a list of the vocabulary values defined for the customer attribute specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getAttributeVocabularyValuesAsync($attributeFQN)
	{
		$mozuClient = AttributeClient::getAttributeVocabularyValuesClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of the specified product attribute.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Attribute 
	* @deprecated deprecated since version 1.17
	*/
	public function getAttribute($attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeClient::getAttributeClient($attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of the specified product attribute.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getAttributeAsync($attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeClient::getAttributeClient($attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

