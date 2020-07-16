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
*	Properties of the calculated shipping rate based on the information supplied in the request.
*/
class RatesResponse
{
	/**
	*Resolved Shipping Zone Code. This value can be null if the tenant/site does not have shipping zones defined or there are no matching shipping zones for the request (e.g. the only zone defined is "UNITED-STATES" and the destination address of the rate request is in Canada)
	*/
	public $resolvedShippingZoneCode;

	/**
	*A code denoting a zone for shipping rates. Zip and postal codes are associated to these zones, determining set rates and costs for shipping origin and destination points.
	*/
	public $shippingZoneCodes;

	/**
	*Arrayed list of calculated shipping rates for each assocuated carrier.
	*/
	public $rates;

}

?>
