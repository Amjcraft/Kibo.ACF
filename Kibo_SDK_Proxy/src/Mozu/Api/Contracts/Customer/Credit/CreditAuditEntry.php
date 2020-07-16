<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\Customer\Credit;



/**
*	Properties of an audit entry logged for a store credit or gift card.
*/
class CreditAuditEntry
{
	/**
	*The type of activity associated with the audit entry. Possible values are: Created, Updated, Deleted, Activated, Deactivated, or Transaction.
	*/
	public $activityType;

	/**
	*Detail log that describes the activity performed for this credit audit entry.
	*/
	public $details;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

}

?>
