<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\ShippingRuntime;



/**
*	Arrayed list of calculated shipping rates for the specified carrier.
*/
class CarrierRatesResponse
{
	/**
	*Unique identifier of the shipping carrier.
	*/
	public $carrierId;

	/**
	*Collection of carrier-specific key-value attribute pairs associated with a shipping carrier. These are required to retrieve a shipping rate request and are returned for the generated shipping label.
	*/
	public $customAttributes;

	/**
	*Array list of calculated shipping rates for the specified carrier.
	*/
	public $shippingRates;

}

?>
