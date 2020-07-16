<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\ProductAdmin;



/**
*	Properties of an inventory definition that defines the level of inventory for a specific product at a given location.
*/
class LocationInventory
{
	/**
	*Product code defined by the tenant administrator to use as a base prefix when generating product codes for any variations of this product.
	*/
	public $baseProductCode;

	/**
	*The unique, user-defined code that identifies a location. This location can be the location where the order was entered, location for newly in-stock products, and where products are returned.
	*/
	public $locationCode;

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $productCode;

	/**
	*The name of the product that represents a line item in a taxable order or product bundle.
	*/
	public $productName;

	/**
	*The stock level for the associated product currently available, at specified locations, and based on the number of pending product reservations as applicable. System-supplied and read only.
	*/
	public $stockAvailable;

	/**
	*The stock level for the associated product currently on back order for this location, based on the number of pending product reservations. System-supplied and read only.
	*/
	public $stockOnBackOrder;

	/**
	*The current physical stock level for the associated product, which does not account for pending product reservations.
	*/
	public $stockOnHand;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

}

?>
