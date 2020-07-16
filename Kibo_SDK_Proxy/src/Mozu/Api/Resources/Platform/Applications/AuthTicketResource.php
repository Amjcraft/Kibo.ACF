<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Platform\Applications;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Platform\Applications\AuthTicketClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use the Authetickets for applications resource to manage authentication tickets for your apps.
*/
class AuthTicketResource {

				



	/**
	* Generate an authentication ticket for an application.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AppAuthInfo $appAuthInfo The information required to authenticate third party applications against the  API.
	* @return AuthTicket 
	* @deprecated deprecated since version 1.17
	*/
	public function authenticateApp($appAuthInfo, $responseFields =  null)
	{
		$mozuClient = AuthTicketClient::authenticateAppClient($appAuthInfo, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Generate an authentication ticket for an application.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function authenticateAppAsync($appAuthInfo, $responseFields =  null)
	{
		$mozuClient = AuthTicketClient::authenticateAppClient($appAuthInfo, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Refreshes the application's authentication ticket and generates a new access token by providing the refresh token string.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AuthTicketRequest $authTicketRequest Properties of the authentication ticket refresh requests, which includes the refresh token string.
	* @return AuthTicket 
	* @deprecated deprecated since version 1.17
	*/
	public function refreshAppAuthTicket($authTicketRequest, $responseFields =  null)
	{
		$mozuClient = AuthTicketClient::refreshAppAuthTicketClient($authTicketRequest, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Refreshes the application's authentication ticket and generates a new access token by providing the refresh token string.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function refreshAppAuthTicketAsync($authTicketRequest, $responseFields =  null)
	{
		$mozuClient = AuthTicketClient::refreshAppAuthTicketClient($authTicketRequest, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes an authentication for an application based on the specified refresh token.
	*
	* @param string $refreshToken Alphanumeric string used for access tokens. This token refreshes access for accounts by generating a new developer or application account authentication ticket after an access token expires.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteAppAuthTicket($refreshToken)
	{
		$mozuClient = AuthTicketClient::deleteAppAuthTicketClient($refreshToken);
		$mozuClient->execute();

	}
	
/**
	* Deletes an authentication for an application based on the specified refresh token.
	*
	* @param string $refreshToken Alphanumeric string used for access tokens. This token refreshes access for accounts by generating a new developer or application account authentication ticket after an access token expires.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function deleteAppAuthTicketAsync($refreshToken)
	{
		$mozuClient = AuthTicketClient::deleteAppAuthTicketClient($refreshToken);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

