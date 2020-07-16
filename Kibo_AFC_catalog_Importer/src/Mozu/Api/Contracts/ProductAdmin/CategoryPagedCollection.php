<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\ProductAdmin;



/**
*	The container for paged lists of related site-specific product category properties.
*/
class CategoryPagedCollection
{
	/**
	*The number of pages returned based on the startIndex and pageSize values specified. This value is system-supplied and read-only.
	*/
	public $pageCount;

	/**
	*The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	*/
	public $pageSize;

		public $startIndex;

	/**
	*The number of results listed in the query collection, represented by a signed 64-bit (8-byte) integer. This value is system-supplied and read-only.
	*/
	public $totalCount;

	/**
	*An array list of objects in the returned collection.
	*/
	public $items;

}

?>
