<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\MZDB;



/**
*	Paged collection of entities.
*/
class EntityCollection
{
	/**
	*The total number of pages of the results divided per the `pageSize`.
	*/
	public $pageCount;

	/**
	*The number of results to display on each page when creating paged results from a query. The amount is divided and displayed on the `pageCount `amount of pages. The default is 20 and maximum value is 200 per page.
	*/
	public $pageSize;

	/**
	*When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a `pageSize `of 25, to get the 51st through the 75th items, use `startIndex=50`.
	*/
	public $startIndex;

	/**
	*The total number of items in the list.
	*/
	public $totalCount;

	/**
	*A list of requested items. All returned data is provided in an items array.For a failed request, the returned response may be success with an empty item array.
	*/
	public $items;

}

?>
