<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\ProductAdmin;



/**
*	The expression you want for the target rule. Refer to [Product Rules](https://www.mozu.com/docs/Guides/settings/shipping.htm#product_rules) in the Shipping Settings guides topic for more information.
*/
class Expression
{
	/**
	*The expression field you wish to target. For example, if you wish to target the productCode field, this value would be productCode.Refer to [Dynamic Category Expressions](../../../developer/api-guides/dynamic-category-exp.htm) for more information about the supported expression fields.
	*/
	public $left;

	/**
	*The logical operator you wish to perform on the nodes within the dynamic expression. Valid values are: "And", and "Or".
	*/
	public $logicalOperator;

	/**
	*The operator you wish to perform on the left field. The valid values of this field are dependent on the left expression field. Refer to [Dynamic Category Expressions](../../../developer/api-guides/dynamic-category-exp.htm) for more information about the supported expression field operators.
	*/
	public $operator;

	/**
	*The literal values of the predicate that is validated against the combined values of the left and operator fields. For example, you wish to validate on products that have a product code of "shoe". You would write the following expression:`"type": "predicate",
			"left": "productCode",
			"operator": "eq",
			"right": "shoe".`
	*/
	public $right;

	/**
	*Specifies either the container of the dynamic expression, or the predicate of the node. Depending on where this is specified in the dynamic expression, the valid values are "container", and "predicate".Refer to [Dynamic Category Expressions](../../../../developer/api-guides/dynamic-category-exp.htm) for more information about using the type field.
	*/
	public $type;

	/**
	*The node or container of the self-contained dynamic expression. The node contains the following expression fields in order: "type", "left", "operator", and "right".For example, a dynamic expression that specifies to include all products that are in the apparel category  would have the following node:`"type": "predicate",
			"left": "Categories.CategoryCode",
			"operator": "eq",
			"right": "apparel".`
	*/
	public $nodes;

}

?>
