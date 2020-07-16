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
*	The login information for a customer account.
*/
class CustomerLoginInfo
{
	/**
	*The email address for the customer account and contact. This email may be used for login to the storefront and for subscription mailing lists.
	*/
	public $emailAddress;

	/**
	*If you are importing existing customer accounts to  or using two customer systems simultaneously, you use this property to store an external password hash that helps you migrate existing customer accounts seamlessly into , without having to require shoppers to create new passwords for the platform.  If you set this property, you must use the [embedded.verifyExternalPassword](https://www.mozu.com/docs/arcjs/commerce-customer/actions/verifyexternalpassword.htm) action to verify that the hashed version of a cleartext password provided by a shopper matches the external password hash specified in this property.
	*/
	public $externalPassword;

	/**
	*Indicates if this object/data was imported from an outside source such as a data import or synchronization via an app or service. If true, this data was originally imported into  and accessible through your store database. Examples of imported objects/data include orders and customer accounts.
	*/
	public $isImport;

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
