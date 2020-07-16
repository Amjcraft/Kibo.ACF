<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\CommerceRuntime\Returns;



/**
*	The reason for which the item is returned. Valid values include Damaged, Defective, MissingParts, DifferentExpectations, Late, NoLongerWanted, or Other.
*/
class ReturnReason
{
	/**
	*The specified quantity of objects and items. This property is used for numerous object types including products, options, components within a product bundle, cart and order items, returned items, shipping line items, items in a digital product. and items associated with types and reservations.
	*/
	public $quantity;

	/**
	*The reason description for an action, including item return, coupon not valid, and item is taxed. 
	*/
	public $reason;

}

?>
