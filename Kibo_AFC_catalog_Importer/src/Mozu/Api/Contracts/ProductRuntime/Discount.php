<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\ProductRuntime;



/**
*	Name of the discount added and applied to a shopping cart and order for a shopper's purchase. 
*/
class Discount
{
	/**
	*The unique identifier of the discount.
	*/
	public $discountId;

	/**
	*Date and time in UTC format when a discount, credit, wish list, or cart expires. An expired discount no longer can be redeemed. An expired wish list is no longer available. An expired credit can no longer be redeemed for a purchase. Acart becomes inactive and expired based on a system-calculated interval. For example, if an anonymous shopper has 14 days of inactivity, the cart is considered abandoned after that period of inactivity. System-supplied and read-only.
	*/
	public $expirationDate;

	/**
	*The localizable, shopper-facing description defined for a discount or a storefront message. 
	*/
	public $friendlyDescription;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

}

?>
