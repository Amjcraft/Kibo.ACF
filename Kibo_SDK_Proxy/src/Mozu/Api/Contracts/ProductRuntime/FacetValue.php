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
*	The value selected for a facet when indexing a product search.
*/
class FacetValue
{
	/**
	*The total number of associated items.
	*/
	public $count;

	/**
	*Submits the selected facet value as a facet value filter.
	*/
	public $filterValue;

	/**
	*If true, the facet value is applied as a filter in the storefront product search.
	*/
	public $isApplied;

	/**
	*Indicates if the object is displayed on the storefront. If true, the admin product category is displayed in the store. If false, the category is not displayed.
	*/
	public $isDisplayed;

	/**
	*Descriptive text used as a label for objects, such as field names, facets, date ranges, contact information, and package information.
	*/
	public $label;

	/**
	*If applicable, the values of any parent category facets in a hierarchy. Hierarchical facets only apply for product categories.
	*/
	public $parentFacetValue;

	/**
	*The maximum value selected or entered for the facet range query.
	*/
	public $rangeQueryValueEnd;

	/**
	*The minimum value selected or entered for the facet range query.
	*/
	public $rangeQueryValueStart;

	/**
	*The value of a property, used by numerous objects within  including facets, attributes, products, localized content, metadata, capabilities ( and third-party), location inventory adjustment, and more. The value may be a string, integer, or double. Validation may be run against the entered and saved values depending on the object type.
	*/
	public $value;

	/**
	*If applicable, the values of any subcategory facets in a hierarchy. Hierarchical facets only apply for product categories.
	*/
	public $childrenFacetValues;

}

?>
