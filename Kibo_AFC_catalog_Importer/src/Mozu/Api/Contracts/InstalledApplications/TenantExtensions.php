<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\InstalledApplications;



/**
*	Mozu.InstalledApplications.Contracts.TenantExtensions ApiType DOCUMENT_HERE 
*/
class TenantExtensions
{
	/**
	*The priority level to assign to application logs. Possible values mirror Apache's log4net: "all", "debug", "info", "warn", "error", "fatal", and "off".
	*/
	public $defaultLogLevel;

	/**
	*The list of actions configured for the site.
	*/
	public $actions;

	/**
	*An array of settings that apply to all actions within the application.
	*/
	public $configurations;

}

?>
