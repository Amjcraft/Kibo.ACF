<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\Customer;



/**
*	The authentication information required to generate an authentication ticket for a customer account.
*/
class CustomerUserAuthInfo
{
	/**
	*The write-only password for the customer account.
	*/
	public $password;

	/**
	*The user name associated with the user profile. The customer uses the user name to access the account.
	*/
	public $username;

}

?>
