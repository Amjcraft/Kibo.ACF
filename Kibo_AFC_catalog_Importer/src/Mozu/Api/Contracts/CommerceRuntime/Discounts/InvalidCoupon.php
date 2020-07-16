<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\CommerceRuntime\Discounts;



/**
*	Properties of an invalid coupon code a shopper attempts to enter for a cart or order.
*/
class InvalidCoupon
{
		public $couponCode;

	/**
	*Date and time when the entity was created, represented in UTC Date/Time.
	*/
	public $createDate;

	/**
	*The unique identifier of the discount.
	*/
	public $discountId;

	/**
	*The reason description for an action, including item return, coupon not valid, and item is taxed. 
	*/
	public $reason;

	/**
	*A code indicating the reason why a facet is invalid.
	*/
	public $reasonCode;

}

?>
