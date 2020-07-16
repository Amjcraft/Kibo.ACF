<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\CommerceRuntime\Commerce;



/**
*	Pricing details for a product in a cart or an order, including the original price, discount amount, and final price.
*/
class CommerceUnitPrice
{
	/**
	*Represents the total price of the line item extended to the shopper. This begins with the Unit Price, then uses any of the following prices if they are defined, in the following order: Override Amount, Sale Amount, List Amount.
	*/
	public $extendedAmount;

	/**
	*The price the item is listed for in the storefront.
	*/
	public $listAmount;

	/**
	*The override price of the item set by the merchant for a given order.
	*/
	public $overrideAmount;

	/**
	*The sale price set for the item.
	*/
	public $saleAmount;

}

?>
