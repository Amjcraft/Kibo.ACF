<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Content;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class DocumentDraftSummaryUrl  {

	/**
		* Get Resource Url for ListDocumentDraftSummaries
		* @param string $documentLists List of document lists that contain documents to delete.
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
		* @return string Resource Url
	*/
	public static function listDocumentDraftSummariesUrl($documentLists, $pageSize, $responseFields, $startIndex)
	{
		$url = "/api/content/documentpublishing/draft?pageSize={pageSize}&startIndex={startIndex}&documentLists={documentLists}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("documentLists", $documentLists);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteDocumentDrafts
		* @param string $documentLists List of document lists that contain documents to delete.
		* @return string Resource Url
	*/
	public static function deleteDocumentDraftsUrl($documentLists)
	{
		$url = "/api/content/documentpublishing/draft?documentLists={documentLists}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("documentLists", $documentLists);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for PublishDocuments
		* @param string $documentLists List of document lists that contain documents to delete.
		* @return string Resource Url
	*/
	public static function publishDocumentsUrl($documentLists)
	{
		$url = "/api/content/documentpublishing/active?documentLists={documentLists}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("documentLists", $documentLists);
		return $mozuUrl;
	}
	
}

?>

