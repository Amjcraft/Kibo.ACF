<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\Customer;



/**
*	The currency code and the total monetary sum of the order. Currently, only USD is supported.
*/
class CurrencyAmount
{
	/**
	*The monetary amount in the specified currency locale code.
	*/
	public $amount;

	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

}

?>
