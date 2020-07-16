<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\Location;



/**
*	Configuration properties of a location usage type for a specified site. The direct ship location usage type consists of a single location that represents location that supports direct ship (DS) fulfillment. The in-store pickup location usage type consists of a list of location types that represent locations that support in-store pickup (SP) fulfillment. The store finder location usage type consists of a list of location codes, location types, or both.
*/
class LocationUsage
{
	/**
	*List of location codes to associate with the location usage. At this time, you can only specify one location code in the request for the direct ship location usage type.
	*/
	public $locationCodes;

	/**
	*List of location type codes associated with the location usage. The location service identifies the locations of the designated type. The in-store pickup (SP) and store finder (storeFinder) location usage types allow specification or multiple location type codes.
	*/
	public $locationTypeCodes;

	/**
	*The system-defined code used to identify the location usage type, which is "DS" for direct ship, "SP" for in-store pickup, or "storeFinder".
	*/
	public $locationUsageTypeCode;

		public $auditInfo;

}

?>
