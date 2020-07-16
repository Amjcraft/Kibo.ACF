<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\ProductAdmin;



/**
*	Properties of an adjustment to the active product inventory of a specific location.
*/
class LocationInventoryAdjustment
{
	/**
	*The unique, user-defined code that identifies a location. This location can be the location where the order was entered, location for newly in-stock products, and where products are returned.
	*/
	public $locationCode;

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $productCode;

	/**
	*The type of inventory adjustment to perform, which is "Absolute" or "Delta". If adjusting by an absolute value, enter the integer in the Value parameter. If adjusting by a delta value, enter the delta in the Value parameter.
	*/
	public $type;

	/**
	*The value of a property, used by numerous objects within  including facets, attributes, products, localized content, metadata, capabilities ( and third-party), location inventory adjustment, and more. The value may be a string, integer, or double. Validation may be run against the entered and saved values depending on the object type.
	*/
	public $value;

}

?>
