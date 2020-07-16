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
*	Shipping method service type, such as UPS Ground or USPS Priority Mail, targeted for a defined discount.
*/
class TargetedShippingMethod
{
	/**
	*The code associated with the carrier's shipping method service type. Service type codes include a prefix that indicates the carrier. For example: FEDEX_INTERNATIONAL_STANDARD
	*/
	public $code;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

}

?>
