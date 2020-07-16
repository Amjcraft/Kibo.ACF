<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\ProductAdmin\Search;



/**
*	A collection of synonym definitions.
*/
class SynonymDefinitionCollection
{
	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $localeCode;

	/**
	*Unique identifier for the site. This ID is used at all levels of a store, catalog, and tenant to associate objects to a site.
	*/
	public $siteId;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

	/**
	*List of mappings for this definition.
	*/
	public $synonymDefinitions;

}

?>
