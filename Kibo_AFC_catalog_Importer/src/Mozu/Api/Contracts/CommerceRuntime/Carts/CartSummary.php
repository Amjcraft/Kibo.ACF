<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\CommerceRuntime\Carts;



/**
*	The properties of an active shopping cart.
*/
class CartSummary
{
	/**
	*If true, this shopping cart is active.
	*/
	public $hasActiveCart;

	/**
	*suaIf true, the cart's period of inactivity is past its calculated expiration date and the cart is considered abandoned.
	*/
	public $isExpired;

	/**
	*The total number of line items in the cart. Each line item can have multiple quantities.
	*/
	public $itemCount;

	/**
	*Total is used to indicate the monetary, estimated total amount of the cart or order, including items, sales tax, shipping costs, and other fees. Totals are not estimated for wish lists at this time.
	*/
	public $total;

	/**
	*The combined total quantity across all items in the cart.
	*/
	public $totalQuantity;

}

?>
