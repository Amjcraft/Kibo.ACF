<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\ShippingAdmin;



/**
*	Properties of the service type, or shipping method, for a specific shipping carrier.
*/
class ServiceType
{
	/**
	*The service type code supplied by the carrier. Service type codes include a prefix that indicates the carrier name. For example: FEDEX_INTERNATIONAL_STANDARD.
	*/
	public $code;

	/**
	*Complex type that contains content for a language specified by LocaleCode.
	*/
	public $content;

}

?>
