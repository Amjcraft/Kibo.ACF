<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Catalog\Admin;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Catalog\Admin\MasterCatalogClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use the Master Catalog resource to view details of the master catalogs associated with a tenant and to manage the product publishing mode for each master catalog.
*/
class MasterCatalogResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieve the details of all master catalog associated with a tenant.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MasterCatalogCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getMasterCatalogs($responseFields =  null)
	{
		$mozuClient = MasterCatalogClient::getMasterCatalogsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieve the details of all master catalog associated with a tenant.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getMasterCatalogsAsync($responseFields =  null)
	{
		$mozuClient = MasterCatalogClient::getMasterCatalogsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieve the details of the master catalog specified in the request.
	*
	* @param int $masterCatalogId The unique identifier of the master catalog associated with the entity.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MasterCatalog 
	* @deprecated deprecated since version 1.17
	*/
	public function getMasterCatalog($masterCatalogId, $responseFields =  null)
	{
		$mozuClient = MasterCatalogClient::getMasterCatalogClient($masterCatalogId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieve the details of the master catalog specified in the request.
	*
	* @param int $masterCatalogId The unique identifier of the master catalog associated with the entity.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getMasterCatalogAsync($masterCatalogId, $responseFields =  null)
	{
		$mozuClient = MasterCatalogClient::getMasterCatalogClient($masterCatalogId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the product publishing mode for the master catalog specified in the request.
	*
	* @param int $masterCatalogId 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param MasterCatalog $masterCatalog Properties of a master product catalog defined for a tenant. All catalogs and sites associated with a master catalog share product definitions.
	* @return MasterCatalog 
	* @deprecated deprecated since version 1.17
	*/
	public function updateMasterCatalog($masterCatalog, $masterCatalogId, $responseFields =  null)
	{
		$mozuClient = MasterCatalogClient::updateMasterCatalogClient($masterCatalog, $masterCatalogId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the product publishing mode for the master catalog specified in the request.
	*
	* @param int $masterCatalogId 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updateMasterCatalogAsync($masterCatalog, $masterCatalogId, $responseFields =  null)
	{
		$mozuClient = MasterCatalogClient::updateMasterCatalogClient($masterCatalog, $masterCatalogId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

