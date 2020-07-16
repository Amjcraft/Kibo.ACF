<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Catalog\Admin\Discounts;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Catalog\Admin\Discounts\DiscountTargetClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;

use Drupal\kibo_sdk_proxy\Mozu\Api\Headers;

/**
* Retrieves and modifies the products, categories, and shipping methods eligible for discounts in the form of a fixed dollar amount, percentage off a product price, or free shipping.
*/
class DiscountTargetResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Retrieves the discount target, that is which products, categories, or shipping methods are eligible for the discount.
	*
	* @param int $discountId discountId parameter description DOCUMENT_HERE 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return DiscountTarget 
	* @deprecated deprecated since version 1.17
	*/
	public function getDiscountTarget($discountId, $responseFields =  null)
	{
		$mozuClient = DiscountTargetClient::getDiscountTargetClient($this->dataViewMode, $discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the discount target, that is which products, categories, or shipping methods are eligible for the discount.
	*
	* @param int $discountId discountId parameter description DOCUMENT_HERE 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getDiscountTargetAsync($discountId, $responseFields =  null)
	{
		$mozuClient = DiscountTargetClient::getDiscountTargetClient($this->dataViewMode, $discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Modifies properties of the discount target, for example, the dollar amount, or precentage off the price.
	*
	* @param int $discountId discountId parameter description DOCUMENT_HERE 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DiscountTarget $discountTarget Properties of the target to which the discount applies, such as the type of discount and which products, categories, or shipping methods are eligible for the discount and the properties of this discount target.
	* @return DiscountTarget 
	* @deprecated deprecated since version 1.17
	*/
	public function updateDiscountTarget($discountTarget, $discountId, $responseFields =  null)
	{
		$mozuClient = DiscountTargetClient::updateDiscountTargetClient($discountTarget, $discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Modifies properties of the discount target, for example, the dollar amount, or precentage off the price.
	*
	* @param int $discountId discountId parameter description DOCUMENT_HERE 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updateDiscountTargetAsync($discountTarget, $discountId, $responseFields =  null)
	{
		$mozuClient = DiscountTargetClient::updateDiscountTargetClient($discountTarget, $discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

