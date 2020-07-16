<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\PaymentService;



/**
*	The properties of a product, referenced and used by carts, orders, wish lists, and returns.
*/
class Product
{
	/**
	*The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	*/
	public $productCode;

	/**
	*The name of the product that represents a line item in a taxable order or product bundle.
	*/
	public $productName;

	/**
	*Mozu.PaymentService.Contracts.Product variantProductCode ApiTypeMember DOCUMENT_HERE 
	*/
	public $variantProductCode;

}

?>
