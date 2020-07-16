<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Platform\Developer;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Platform\Developer\DeveloperAdminUserAuthTicketClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use the Authtickets resource to manage authentication tickets for your developer account.
*/
class DeveloperAdminUserAuthTicketResource {

				



	/**
	* Generate an authentication ticket for a developer account.
	*
	* @param int $developerAccountId Unique identifier of the developer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param UserAuthInfo $userAuthInfo Information required to authenticate a user.
	* @return DeveloperAdminUserAuthTicket 
	* @deprecated deprecated since version 1.17
	*/
	public function createDeveloperUserAuthTicket($userAuthInfo, $developerAccountId =  null, $responseFields =  null)
	{
		$mozuClient = DeveloperAdminUserAuthTicketClient::createDeveloperUserAuthTicketClient($userAuthInfo, $developerAccountId, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Generate an authentication ticket for a developer account.
	*
	* @param int $developerAccountId Unique identifier of the developer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function createDeveloperUserAuthTicketAsync($userAuthInfo, $developerAccountId =  null, $responseFields =  null)
	{
		$mozuClient = DeveloperAdminUserAuthTicketClient::createDeveloperUserAuthTicketClient($userAuthInfo, $developerAccountId, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Generates a new developer account authentication ticket for the specified tenant by supplying the defined refresh token information.
	*
	* @param int $developerAccountId Unique identifier of the developer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DeveloperAdminUserAuthTicket $existingAuthTicket Properties of the authentication ticket to be used in developer account claims with the  API.
	* @return DeveloperAdminUserAuthTicket 
	* @deprecated deprecated since version 1.17
	*/
	public function refreshDeveloperAuthTicket($existingAuthTicket, $developerAccountId =  null, $responseFields =  null)
	{
		$mozuClient = DeveloperAdminUserAuthTicketClient::refreshDeveloperAuthTicketClient($existingAuthTicket, $developerAccountId, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Generates a new developer account authentication ticket for the specified tenant by supplying the defined refresh token information.
	*
	* @param int $developerAccountId Unique identifier of the developer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function refreshDeveloperAuthTicketAsync($existingAuthTicket, $developerAccountId =  null, $responseFields =  null)
	{
		$mozuClient = DeveloperAdminUserAuthTicketClient::refreshDeveloperAuthTicketClient($existingAuthTicket, $developerAccountId, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the authentication ticket for the developer account by supplying the refresh token.
	*
	* @param string $refreshToken Alphanumeric string used for access tokens. This token refreshes access for accounts by generating a new developer or application account authentication ticket after an access token expires.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteUserAuthTicket($refreshToken)
	{
		$mozuClient = DeveloperAdminUserAuthTicketClient::deleteUserAuthTicketClient($refreshToken);
		$mozuClient->execute();

	}
	
/**
	* Deletes the authentication ticket for the developer account by supplying the refresh token.
	*
	* @param string $refreshToken Alphanumeric string used for access tokens. This token refreshes access for accounts by generating a new developer or application account authentication ticket after an access token expires.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function deleteUserAuthTicketAsync($refreshToken)
	{
		$mozuClient = DeveloperAdminUserAuthTicketClient::deleteUserAuthTicketClient($refreshToken);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

