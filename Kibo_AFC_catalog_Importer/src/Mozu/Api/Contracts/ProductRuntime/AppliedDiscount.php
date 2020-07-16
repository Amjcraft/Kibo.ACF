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
*	The discount currently applied to the cart or order, represented as a negative currency amount to be subtracted from the final price. If multiple discounts are applied to the same order, the Applied Discount displays the most valuable discount for the shopper.
*/
class AppliedDiscount
{
	/**
	*Alphanumeric code associated with the coupon or promotion that results in a discounted price.
	*/
	public $couponCode;

	/**
	*The value of the discount applied to the cart or order, represented as a negative currency amount to apply to the original price.
	*/
	public $impact;

	/**
	*Name of the discount added and applied to a shopping cart and order for a shopper's purchase. 
	*/
	public $discount;

}

?>
