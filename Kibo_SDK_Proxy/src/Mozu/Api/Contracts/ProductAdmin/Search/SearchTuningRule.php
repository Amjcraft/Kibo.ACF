<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\ProductAdmin\Search;



/**
*	Mozu.ProductAdmin.Contracts.Search.SearchTuningRule ApiType DOCUMENT_HERE 
*/
class SearchTuningRule
{
	/**
	*Specifies whether the search results tuning rule is active.
	*/
	public $active;

	/**
	*The date that the search tuning rule is no longer active.
	*/
	public $activeEndDate;

	/**
	*The date the search tuning rule starts being active.
	*/
	public $activeStartDate;

	/**
	*A list of product codes that you wish to block from appearing on a search result, or on a specific category page. Use the filters field to specify a category page.
	*/
	public $blockedProductCodes;

	/**
	*A list of product codes that you wish to explicitly boost using the search tuning rule.  The order that you list products in defines the order that they appear in a search result, or category page.
	*/
	public $boostedProductCodes;

	/**
	*Indicates if the object is default. This indicator is used for product variations and site search settings. If true, the value/object is the default option. 
	*/
	public $isDefault;

	/**
	*The keywords that trigger the search tuning rule. These are specific keywords that shoppers search for.
	*/
	public $keywords;

	/**
	*The unique identifier of the search tuning rule.
	*/
	public $searchTuningRuleCode;

	/**
	*The description of the search tuning rule. Use this field for further identification purposes.
	*/
	public $searchTuningRuleDescription;

	/**
	*The name of the search tuning rule. Use this field for further identification purposes.
	*/
	public $searchTuningRuleName;

	/**
	*Unique identifier for the site. This ID is used at all levels of a store, catalog, and tenant to associate objects to a site.
	*/
	public $siteId;

	/**
	*Basic audit info about the object, including date, time, and user account. This data may be captured when creating, updating, and removing data.
	*/
	public $auditInfo;

	/**
	*The filters that limit what the search tuning rule is applied to. Currently, the only supported filters are category pages.For example, you can limit the search tuning rule to only apply when a shopper either navigates to or searches for a specific keyword on a category page.
	*/
	public $filters;

}

?>
