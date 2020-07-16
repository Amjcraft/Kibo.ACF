<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\AppDev;



/**
*	Properties of the authentication ticket used to authenticate applications.
*/
class AuthTicket
{
	/**
	*Alphanumeric string used to authenticate the user in API request headers. The token stores an encrypted list of the application's configured behaviors and authenticates the application.
	*/
	public $accessToken;

	/**
	*The date and time the user access token expires. If the token will expire, a new token will need to be generated and assigned to the account to continue and restore access to the store, data, and account.
	*/
	public $accessTokenExpiration;

	/**
	*Alphanumeric string used for access tokens. This token refreshes access for accounts by generating a new developer or application account authentication ticket after an access token expires.
	*/
	public $refreshToken;

	/**
	*The date and time the developer account or application refresh token expires.
	*/
	public $refreshTokenExpiration;

}

?>
