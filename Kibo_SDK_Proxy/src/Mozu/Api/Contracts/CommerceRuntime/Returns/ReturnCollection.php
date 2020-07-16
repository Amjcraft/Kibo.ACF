<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\CommerceRuntime\Returns;



/**
*	List of returns and the details of each return in the list.
*/
class ReturnCollection
{
	/**
	*The number of pages returned based on the startIndex and pageSize values specified. This value is system-supplied and read-only.
	*/
	public $pageCount;

	/**
	*The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	*/
	public $pageSize;

	/**
	*When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	*/
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
