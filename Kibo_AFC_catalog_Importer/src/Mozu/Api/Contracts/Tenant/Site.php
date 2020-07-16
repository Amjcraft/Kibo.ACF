<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\Tenant;



/**
*	Properties of a site associated with a tenant.
*/
class Site
{
	/**
	*The unique identifier of the catalog of products used by a site.
	*/
	public $catalogId;

		public $countryCode;

	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*Properties of the domain that the tenant is associated with such as the domain name, the zone string, audit information (system-supplied and read-only), assignment data, and whether or not the domain is primary or requires a SSL for authentication.
	*/
	public $domain;

		public $id;

	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $localeCode;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*The primary custom domain of the site.
	*/
	public $primaryCustomDomain;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

}

?>
