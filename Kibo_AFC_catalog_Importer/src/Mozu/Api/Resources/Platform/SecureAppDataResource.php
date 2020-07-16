<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Platform;

use Drupal\acf_kibo\Mozu\Api\Clients\Platform\SecureAppDataClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;


/**
* Manage Secure App Settings. Expose via arc.js so that arc apps can securely access secrets. Third-party extensions can also access their data. Secured via AppKey.AppId
*/
class SecureAppDataResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* platform-secureappdata Get GetDBValue description DOCUMENT_HERE 
	*
	* @param string $appKeyId 
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return JObject 
	* @deprecated deprecated since version 1.17
	*/
	public function getDBValue($appKeyId, $dbEntryQuery, $responseFields =  null)
	{
		$mozuClient = SecureAppDataClient::getDBValueClient($appKeyId, $dbEntryQuery, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* platform-secureappdata Get GetDBValue description DOCUMENT_HERE 
	*
	* @param string $appKeyId 
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getDBValueAsync($appKeyId, $dbEntryQuery, $responseFields =  null)
	{
		$mozuClient = SecureAppDataClient::getDBValueClient($appKeyId, $dbEntryQuery, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* platform-secureappdata Post CreateDBValue description DOCUMENT_HERE 
	*
	* @param string $appKeyId 
	* @param string $dbEntryQuery The database entry string to create.
	* @param JObject $value The value string to create.
	* @deprecated deprecated since version 1.17
	*/
	public function createDBValue($value, $appKeyId, $dbEntryQuery)
	{
		$mozuClient = SecureAppDataClient::createDBValueClient($value, $appKeyId, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* platform-secureappdata Post CreateDBValue description DOCUMENT_HERE 
	*
	* @param string $appKeyId 
	* @param string $dbEntryQuery The database entry string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function createDBValueAsync($value, $appKeyId, $dbEntryQuery)
	{
		$mozuClient = SecureAppDataClient::createDBValueClient($value, $appKeyId, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* platform-secureappdata Put UpdateDBValue description DOCUMENT_HERE 
	*
	* @param string $appKeyId 
	* @param string $dbEntryQuery The database entry string to create.
	* @param JObject $value The value string to create.
	* @deprecated deprecated since version 1.17
	*/
	public function updateDBValue($value, $appKeyId, $dbEntryQuery)
	{
		$mozuClient = SecureAppDataClient::updateDBValueClient($value, $appKeyId, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* platform-secureappdata Put UpdateDBValue description DOCUMENT_HERE 
	*
	* @param string $appKeyId 
	* @param string $dbEntryQuery The database entry string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function updateDBValueAsync($value, $appKeyId, $dbEntryQuery)
	{
		$mozuClient = SecureAppDataClient::updateDBValueClient($value, $appKeyId, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* platform-secureappdata Delete DeleteDBValue description DOCUMENT_HERE 
	*
	* @param string $appKeyId 
	* @param string $dbEntryQuery The database entry string to create.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteDBValue($appKeyId, $dbEntryQuery)
	{
		$mozuClient = SecureAppDataClient::deleteDBValueClient($appKeyId, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* platform-secureappdata Delete DeleteDBValue description DOCUMENT_HERE 
	*
	* @param string $appKeyId 
	* @param string $dbEntryQuery The database entry string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function deleteDBValueAsync($appKeyId, $dbEntryQuery)
	{
		$mozuClient = SecureAppDataClient::deleteDBValueClient($appKeyId, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

