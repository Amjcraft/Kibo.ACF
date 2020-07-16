<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\ShippingAdmin\Profile;



/**
*	Mozu.ShippingAdmin.Contracts.Profile.ShippingProfile ApiType DOCUMENT_HERE 
*/
class ShippingProfile
{
	/**
	*The unique code of the shipping profile.
	*/
	public $code;

	/**
	*A list of unique site identifiers that the shipping profile targets.
	*/
	public $targetedSiteIds;

	/**
	*Basic audit info about the object, including date, time, and user account. This data may be captured when creating, updating, and removing data.
	*/
	public $auditInfo;

	/**
	*A list of order handling fee rules and their details.
	*/
	public $orderHandlingFeeRules;

	/**
	*A list of product handling fee rules and their details.
	*/
	public $productHandlingFeeRules;

	/**
	*A list of shipping inclusion rules and their details.
	*/
	public $shippingInclusionRules;

}

?>
