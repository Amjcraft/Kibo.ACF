<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\SiteSettings\Order;



/**
*	The details of the payment terms assocaited with the purchase order payment.Refer to [Payment Terms](https://www.mozu.com/docs/guides/orders/purchase-order.htm#payment_terms) in the Purchase Orders guides topic for more information.
*/
class PurchaseOrderPaymentTerm
{
	/**
	*The unique code for the payment term associated with the purchase order payment type.Refer to [Payment Terms](https://www.mozu.com/docs/guides/orders/purchase-order.htm#payment_terms) in the Purchase Orders guides topic for more information.
	*/
	public $code;

	/**
	*The localized description in text for the object, displayed per the locale code. For example, descriptions are used for product descriptions, attributes, and pre-authorization transaction types.
	*/
	public $description;

	/**
	*The order/sequence position in which  displays the payment term.
	*/
	public $sequenceNumber;

}

?>
