<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Platform\Adminuser;

use Drupal\acf_kibo\Mozu\Api\Clients\Platform\Adminuser\AdminUserClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;


/**
* The Accounts resource displays the user accounts and account details associated with a developer or  tenant administrator. Email addresses uniquely identify admin user accounts.
*/
class AdminUserResource {

				



	/**
	* Retrieves a list of the  tenants or development stores for which the specified user has an assigned role.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return TenantCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getTenantScopesForUser($userId, $responseFields =  null)
	{
		$mozuClient = AdminUserClient::getTenantScopesForUserClient($userId, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of the  tenants or development stores for which the specified user has an assigned role.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getTenantScopesForUserAsync($userId, $responseFields =  null)
	{
		$mozuClient = AdminUserClient::getTenantScopesForUserClient($userId, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of the specified administrator user account.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return User 
	* @deprecated deprecated since version 1.17
	*/
	public function getUser($userId, $responseFields =  null)
	{
		$mozuClient = AdminUserClient::getUserClient($userId, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of the specified administrator user account.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getUserAsync($userId, $responseFields =  null)
	{
		$mozuClient = AdminUserClient::getUserClient($userId, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

