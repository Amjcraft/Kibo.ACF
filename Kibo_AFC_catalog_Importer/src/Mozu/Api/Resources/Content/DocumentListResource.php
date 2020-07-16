<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Content;

use Drupal\acf_kibo\Mozu\Api\Clients\Content\DocumentListClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;

use Drupal\acf_kibo\Mozu\Api\Headers;

/**
* Use the document lists resource to organize your site's documents into a hierarchy. Document lists can contain documents, folders, and complete hierarchies of folders, which contain documents with unique names.
*/
class DocumentListResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Retrieves a collection of document lists.
	*
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param int $startIndex 
	* @return DocumentListCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getDocumentLists($pageSize =  null, $startIndex =  null, $responseFields =  null)
	{
		$mozuClient = DocumentListClient::getDocumentListsClient($this->dataViewMode, $pageSize, $startIndex, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a collection of document lists.
	*
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getDocumentListsAsync($pageSize =  null, $startIndex =  null, $responseFields =  null)
	{
		$mozuClient = DocumentListClient::getDocumentListsClient($this->dataViewMode, $pageSize, $startIndex, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieve the details of a document list by providing the list name.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return DocumentList 
	* @deprecated deprecated since version 1.17
	*/
	public function getDocumentList($documentListName, $responseFields =  null)
	{
		$mozuClient = DocumentListClient::getDocumentListClient($this->dataViewMode, $documentListName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieve the details of a document list by providing the list name.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getDocumentListAsync($documentListName, $responseFields =  null)
	{
		$mozuClient = DocumentListClient::getDocumentListClient($this->dataViewMode, $documentListName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new documentList
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DocumentList $list The list of document types and related properties that define content used by the content management system (CMS).
	* @return DocumentList 
	* @deprecated deprecated since version 1.17
	*/
	public function createDocumentList($list, $responseFields =  null)
	{
		$mozuClient = DocumentListClient::createDocumentListClient($this->dataViewMode, $list, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new documentList
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function createDocumentListAsync($list, $responseFields =  null)
	{
		$mozuClient = DocumentListClient::createDocumentListClient($this->dataViewMode, $list, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates a `DocumentListName`.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DocumentList $list The list of document types and related properties that define content used by the content management system (CMS).
	* @return DocumentList 
	* @deprecated deprecated since version 1.17
	*/
	public function updateDocumentList($list, $documentListName, $responseFields =  null)
	{
		$mozuClient = DocumentListClient::updateDocumentListClient($list, $documentListName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates a `DocumentListName`.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function updateDocumentListAsync($list, $documentListName, $responseFields =  null)
	{
		$mozuClient = DocumentListClient::updateDocumentListClient($list, $documentListName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the specified `DocumentListName`.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @deprecated deprecated since version 1.17
	*/
	public function deleteDocumentList($documentListName)
	{
		$mozuClient = DocumentListClient::deleteDocumentListClient($documentListName);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the specified `DocumentListName`.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function deleteDocumentListAsync($documentListName)
	{
		$mozuClient = DocumentListClient::deleteDocumentListClient($documentListName);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

