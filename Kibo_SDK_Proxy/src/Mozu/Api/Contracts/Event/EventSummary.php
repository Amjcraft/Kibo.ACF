<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\Event;



/**
*	Properties of events as a summary of actions, data, and responses.
*/
class EventSummary
{
	/**
	*The unique identifier for the product catalog. Catalogs are part of a master catalog.
	*/
	public $catalogId;

	/**
	*The unique identifier of the API request associated with the event action, which might contain multiple actions.
	*/
	public $correlationId;

	/**
	*The date and time in UTC format set when the object was created.
	*/
	public $createDate;

	/**
	*The unique identifier of the entity that caused the event. For example, if the event is "product.created", the entity ID value represents the product code of the product that was created.
	*/
	public $entityId;

	/**
	*Unique identifier for the event. 
	*/
	public $eventId;

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
	*The type of event that was performed, such as "product.created" or "category.deleted".
	*/
	public $topic;

	/**
	*Extended properties. Note: This is purposefully not a CollectionBase type wrapper so consumers start to get used to not having counts returned.
	*/
	public $extendedProperties;

}

?>
