<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\PaymentService\Response;



/**
*	Mozu.PaymentService.Contracts.Response.FraudScreen ApiType DOCUMENT_HERE 
*/
class FraudScreen
{
	/**
	*Unique identifier of the payment interaction from the payment gateway.
	*/
	public $gatewayInteractionId;

	/**
	*The current status of the object.This value is read only. Valid values for this field are: "Active", "Expired", and "Inactive".
	*/
	public $status;

	/**
	*Mozu.PaymentService.Contracts.Response.FraudScreen transactionId ApiTypeMember DOCUMENT_HERE 
	*/
	public $transactionId;

	/**
	*Mozu.PaymentService.Contracts.Response.FraudScreen fraudScreenResponseData ApiTypeMember DOCUMENT_HERE 
	*/
	public $fraudScreenResponseData;

}

?>
