<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\CommerceRuntime\Payments;



/**
*	Properties of the billing information entered for an order during checkout.
*/
class BillingInfo
{
	/**
	*Holds the transaction ID for an external payment type service.
	*/
	public $externalTransactionId;

	/**
	*If true, the system overrides the customer's billing address information with the supplied fulfillment information.
	*/
	public $isSameBillingShippingAddress;

	/**
	*The type of payment, such as credit card, check, or PayPal Express. Additional payment types will be supported in future releases.
	*/
	public $paymentType;

	/**
	*Identifies a specific workflow the payment goes through. This is used to define a workflow for external payment services.
	*/
	public $paymentWorkflow;

	/**
	*The code that identifies the store credit to apply to the order.
	*/
	public $storeCreditCode;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*The cardholder's billing contact information, including addresses.
	*/
	public $billingContact;

	/**
	*If the customer is paying by card, the credit card information.
	*/
	public $card;

	/**
	*Information about the check used in the billing information, if it exists.
	*/
	public $check;

	/**
	*Custom data originated by the billing service.
	*/
	public $data;

	/**
	*The purchase order payment details.
	*/
	public $purchaseOrder;

}

?>
