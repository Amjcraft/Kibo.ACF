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
*	Mozu.ProductAdmin.Contracts.AssignedDiscount ApiType DOCUMENT_HERE 
*/
class AssignedDiscount
{
	/**
	*The unique identifier of the coupon set.
	*/
	public $couponSetCode;

	/**
	*The unique, system generated id. You can use this value to further identify the coupon set.This value is ready only.
	*/
	public $couponSetId;

	/**
	*The unique identifier of the discount.
	*/
	public $discountId;

	/**
	*Basic audit info about the object, including date, time, and user account. This data may be captured when creating, updating, and removing data.
	*/
	public $auditInfo;

}

?>
