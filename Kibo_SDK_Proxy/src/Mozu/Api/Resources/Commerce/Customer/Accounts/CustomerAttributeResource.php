<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Customer\Accounts;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Customer\Accounts\CustomerAttributeClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use the Attributes subresource to manage the attributes used to uniquely identify shopper accounts, such as gender or age.
*/
class CustomerAttributeResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves the contents of an attribute associated with the specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CustomerAttribute 
	* @deprecated deprecated since version 1.17
	*/
	public function getAccountAttribute($accountId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = CustomerAttributeClient::getAccountAttributeClient($accountId, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the contents of an attribute associated with the specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getAccountAttributeAsync($accountId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = CustomerAttributeClient::getAccountAttributeClient($accountId, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the list of customer account attributes.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return CustomerAttributeCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getAccountAttributes($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CustomerAttributeClient::getAccountAttributesClient($accountId, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the list of customer account attributes.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getAccountAttributesAsync($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CustomerAttributeClient::getAccountAttributesClient($accountId, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Applies a defined attribute to the customer account specified in the request and assigns a value to the customer attribute.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerAttribute $attribute Properties of an attribute associated with a customer account.
	* @return CustomerAttribute 
	* @deprecated deprecated since version 1.17
	*/
	public function addAccountAttribute($attribute, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerAttributeClient::addAccountAttributeClient($attribute, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Applies a defined attribute to the customer account specified in the request and assigns a value to the customer attribute.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function addAccountAttributeAsync($attribute, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerAttributeClient::addAccountAttributeClient($attribute, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates one or more details of a customer account attribute.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerAttribute $attribute Properties of an attribute associated with a customer account.
	* @return CustomerAttribute 
	* @deprecated deprecated since version 1.17
	*/
	public function updateAccountAttribute($attribute, $accountId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = CustomerAttributeClient::updateAccountAttributeClient($attribute, $accountId, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates one or more details of a customer account attribute.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updateAccountAttributeAsync($attribute, $accountId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = CustomerAttributeClient::updateAccountAttributeClient($attribute, $accountId, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Removes the attribute specified in the request from the customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteAccountAttribute($accountId, $attributeFQN)
	{
		$mozuClient = CustomerAttributeClient::deleteAccountAttributeClient($accountId, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Removes the attribute specified in the request from the customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function deleteAccountAttributeAsync($accountId, $attributeFQN)
	{
		$mozuClient = CustomerAttributeClient::deleteAccountAttributeClient($accountId, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

