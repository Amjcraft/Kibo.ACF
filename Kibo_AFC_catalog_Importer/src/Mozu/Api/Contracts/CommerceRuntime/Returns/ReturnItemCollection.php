<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\CommerceRuntime\Returns;



/**
*	Collection of all return items that appear on the order.
*/
class ReturnItemCollection
{
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
