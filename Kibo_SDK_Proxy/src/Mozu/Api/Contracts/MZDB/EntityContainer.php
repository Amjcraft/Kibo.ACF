<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\MZDB;



/**
*	Properties of the EntityContainer within a specific tenant and site.
*/
class EntityContainer
{
	/**
	*The unique identifier for the product catalog. Catalogs are part of a master catalog.
	*/
	public $catalogId;

	/**
	*Identifier of the user that created the object. System created and read only.
	*/
	public $createBy;

	/**
	*The date and time in UTC format set when the object was created.
	*/
	public $createDate;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*The nameSpace and name for the EntityList in the format name@nameSpace.
	*/
	public $listFullName;

	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $localeCode;

	/**
	*Unique identifier for the master catalog. 
	*/
	public $masterCatalogId;

	/**
	*Unique identifier for the site. This ID is used at all levels of a store, catalog, and tenant to associate objects to a site.
	*/
	public $siteId;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

	/**
	*Identifier of the user that updated the entity most recently.
	*/
	public $updateBy;

	/**
	*The date and time in UTC format the object was updated most recently.
	*/
	public $updateDate;

	/**
	*Unique identifier of the customer account (shopper or system user). System-supplied and read-only. If the shopper user is anonymous, the user ID represents a system-generated user ID string.
	*/
	public $userId;

	/**
	*The entity in JSON format.
	*/
	public $item;

}

?>
