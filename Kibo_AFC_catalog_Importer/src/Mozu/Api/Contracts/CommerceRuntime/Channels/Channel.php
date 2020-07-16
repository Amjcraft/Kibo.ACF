<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\CommerceRuntime\Channels;



/**
*	Properties of a channel used to divide a company into logical business divisions, such as "US Retail," "US Online," or "Amazon." All sites and orders are associated with a channel.
*/
class Channel
{
	/**
	*Array list of site identifiers associated with this channel. Each tenant site must have a channel association.
	*/
	public $siteIds;

	/**
	*User-defined code that uniquely identifies the channel.
	*/
	public $code;

		public $countryCode;

	/**
	*User-defined code that identifies the channel group.
	*/
	public $groupCode;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*The geographical region associated with this channel. This region could represent any geographical entity from a state to a continent.
	*/
	public $region;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

}

?>
