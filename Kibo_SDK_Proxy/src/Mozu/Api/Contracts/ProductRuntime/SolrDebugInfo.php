<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\ProductRuntime;



/**
*	A container of debugging information from Solr.
*/
class SolrDebugInfo
{
	/**
	*A list of products that have been blocked in Solr by search tuning rules.
	*/
	public $blockedProductCodes;

	/**
	*A list of products that have been boosted in Solr by search tuning rules.
	*/
	public $boostedProductCodes;

	/**
	*A list of boost functions sent to Solr by search tuning rules.
	*/
	public $boostFunctions;

	/**
	*A list of boost queries sent to Solr by search tuning rules.
	*/
	public $boostQueries;

	/**
	*A list of search tuning rule codes sent to Solr.
	*/
	public $searchTuningRuleCode;

}

?>
