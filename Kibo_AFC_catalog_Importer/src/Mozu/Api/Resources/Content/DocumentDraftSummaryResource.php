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

use Drupal\acf_kibo\Mozu\Api\Clients\Content\DocumentDraftSummaryClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;


/**
* Use the document publishing subresource to manage and publish document drafts in the Content service.
*/
class DocumentDraftSummaryResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of the documents currently in draft state, according to any defined filter and sort criteria.
	*
	* @param string $documentLists List of document lists that contain documents to delete.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return DocumentDraftSummaryPagedCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function listDocumentDraftSummaries($pageSize =  null, $startIndex =  null, $documentLists =  null, $responseFields =  null)
	{
		$mozuClient = DocumentDraftSummaryClient::listDocumentDraftSummariesClient($pageSize, $startIndex, $documentLists, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of the documents currently in draft state, according to any defined filter and sort criteria.
	*
	* @param string $documentLists List of document lists that contain documents to delete.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function listDocumentDraftSummariesAsync($pageSize =  null, $startIndex =  null, $documentLists =  null, $responseFields =  null)
	{
		$mozuClient = DocumentDraftSummaryClient::listDocumentDraftSummariesClient($pageSize, $startIndex, $documentLists, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the drafts of the specified documents. Published documents cannot be deleted.
	*
	* @param string $documentLists List of document lists that contain documents to delete.
	* @param array|string $documentIds Unique identifiers of the documents to delete.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteDocumentDrafts($documentIds, $documentLists =  null)
	{
		$mozuClient = DocumentDraftSummaryClient::deleteDocumentDraftsClient($documentIds, $documentLists);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the drafts of the specified documents. Published documents cannot be deleted.
	*
	* @param string $documentLists List of document lists that contain documents to delete.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function deleteDocumentDraftsAsync($documentIds, $documentLists =  null)
	{
		$mozuClient = DocumentDraftSummaryClient::deleteDocumentDraftsClient($documentIds, $documentLists);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Publish one or more document drafts to live content on the site.
	*
	* @param string $documentLists List of document lists that contain documents to delete.
	* @param array|string $documentIds Unique identifiers of the documents to delete.
	* @deprecated deprecated since version 1.17
	*/
	public function publishDocuments($documentIds, $documentLists =  null)
	{
		$mozuClient = DocumentDraftSummaryClient::publishDocumentsClient($documentIds, $documentLists);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Publish one or more document drafts to live content on the site.
	*
	* @param string $documentLists List of document lists that contain documents to delete.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function publishDocumentsAsync($documentIds, $documentLists =  null)
	{
		$mozuClient = DocumentDraftSummaryClient::publishDocumentsClient($documentIds, $documentLists);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

