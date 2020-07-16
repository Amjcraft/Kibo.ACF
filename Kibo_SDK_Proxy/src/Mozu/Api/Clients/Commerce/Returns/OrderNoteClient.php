<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Returns;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Returns\OrderNoteUrl;


/**
* Use the Return Notes resource to access and modify internal notes associated with returns. These notes can be useful to customer service representatives viewing them in .
*/
class OrderNoteClient {

	/**
	* Retrieves all internal notes associated with a return.
	*
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return MozuClient
	*/
	public static function getReturnNotesClient($returnId)
	{
		$url = OrderNoteUrl::getReturnNotesUrl($returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a specific internal note from a return.
	*
	* @param string $noteId Unique identifier of a particular note to retrieve.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return MozuClient
	*/
	public static function getReturnNoteClient($returnId, $noteId, $responseFields =  null)
	{
		$url = OrderNoteUrl::getReturnNoteUrl($noteId, $responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates an internal note on a given return. This note is visible in  for customer service representatives to see.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param OrderNote $returnNote 
	* @return MozuClient
	*/
	public static function createReturnNoteClient($returnNote, $returnId, $responseFields =  null)
	{
		$url = OrderNoteUrl::createReturnNoteUrl($responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($returnNote);
		return $mozuClient;

	}
	
	/**
	* Updates an internal note on a given return. This note is visible in  for customer service representatives to see.
	*
	* @param string $noteId Unique identifier of a particular note to retrieve.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param OrderNote $returnNote 
	* @return MozuClient
	*/
	public static function updateReturnNoteClient($returnNote, $returnId, $noteId, $responseFields =  null)
	{
		$url = OrderNoteUrl::updateReturnNoteUrl($noteId, $responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($returnNote);
		return $mozuClient;

	}
	
	/**
	* Deletes an internal note from a given return.
	*
	* @param string $noteId Unique identifier of a particular note to retrieve.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	*/
	public static function deleteReturnNoteClient($returnId, $noteId)
	{
		$url = OrderNoteUrl::deleteReturnNoteUrl($noteId, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

