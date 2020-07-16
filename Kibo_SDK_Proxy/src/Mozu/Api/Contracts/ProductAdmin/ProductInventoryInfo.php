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
*	Properties of the inventory behavior associated with a product definition.
*/
class ProductInventoryInfo
{
	/**
	*Indicates is the item's stock is managed. If true,  manages inventory levels for this product.
	*/
	public $manageStock;

	/**
	*Determines the method this product uses when active stock is depeleted. Options include "DisplayMessage" to display an out of stock message to the shopper, "HideProduct" to disable the product on the storefront, or "AllowBackOrder" to allow the shopper to back order the product. This property is required only if  manages inventory for this product.
	*/
	public $outOfStockBehavior;

}

?>
