<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\Core;



/**
*	Properties of the user. Users include customers and  users.
*/
class User
{
	/**
	*The email address of the specified user or the email address associated with the specified entity.
	*/
	public $emailAddress;

	/**
	*The first name of the contact. The maximum character length is 200.
	*/
	public $firstName;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*Indicates if the object or feature is active.
	*/
	public $isActive;

	/**
	*The last name or surname of the contact. The maximum character length is 200.
	*/
	public $lastName;

	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $localeCode;

	/**
	*The write-only password for the customer account.
	*/
	public $password;

	/**
	*Collection of roles assigned to the user.
	*/
	public $roles;

	/**
	*Collection of system-supplied data about the user.
	*/
	public $systemData;

}

?>
