<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\Customer;



/**
*	Properties of a customer visit to one of a company's sites.
*/
class Visit
{
	/**
	*Unique identifier of the customer account generated by the system. Account IDs are generated at account creation.
	*/
	public $accountId;

	/**
	*If the customer visit is made online, the location code associated with the website visited.
	*/
	public $browserLocationCode;

	/**
	*The date and time recording for a customer action including a transaction and storefront visit.
	*/
	public $date;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*The unique, user-defined code that identifies a location. This location can be the location where the order was entered, location for newly in-stock products, and where products are returned.
	*/
	public $locationCode;

	/**
	*The type of customer visit, which is "Website," "Store," "Call," or "Unknown."
	*/
	public $type;

	/**
	*Unique identifier of the customer account (shopper or system user). System-supplied and read-only. If the shopper user is anonymous, the user ID represents a system-generated user ID string.
	*/
	public $userId;

	/**
	*The HTTP_Referrer that initiatied the visit started. If the shopper was not referred from another source, this value is null.
	*/
	public $webReferrer;

	/**
	*Unique identifier of the web session in which the cart, order, return, or wish list was created or last modified.
	*/
	public $webSessionId;

	/**
	*Unique identifier of the site.
	*/
	public $webSiteId;

	/**
	*The user agent string for the browser.
	*/
	public $webUserAgent;

	/**
	*Array list of transactions the customer performed during the visit. A customer can perform multiple transactions in a single visit, or the visit can have no associated transactions.
	*/
	public $transactions;

}

?>
