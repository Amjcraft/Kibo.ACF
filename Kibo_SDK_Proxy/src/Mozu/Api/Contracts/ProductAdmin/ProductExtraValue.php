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
*	Properties of a defined value for a product extra attribute.
*/
class ProductExtraValue
{
	/**
	*The difference between the weight associated with this product, variation option, or extra and the base product. For example, if a product with a monogram weighs an extra 1/4 lb, the DeltaWeight value is "0.25". The amount of the delta is set by the weight type for the storefront.
	*/
	public $deltaWeight;

	/**
	*If true, the value for the product extra is selected by default. Shopper entered extras cannot be defaulted.
	*/
	public $isDefaulted;

	/**
	*The specified quantity of objects and items. This property is used for numerous object types including products, options, components within a product bundle, cart and order items, returned items, shipping line items, items in a digital product. and items associated with types and reservations.
	*/
	public $quantity;

	/**
	*The value of a property, used by numerous objects within  including facets, attributes, products, localized content, metadata, capabilities ( and third-party), location inventory adjustment, and more. The value may be a string, integer, or double. Validation may be run against the entered and saved values depending on the object type.
	*/
	public $value;

	/**
	*Properties of an individual vocabulary value for an attribute. For example, a "color" attribute might have the following vocabulary values: Red, Blue, Green.
	*/
	public $attributeVocabularyValueDetail;

	/**
	*If the product is in relative pricing mode, this is the difference between associated prices for a product, variation option, or extra. The difference is calculated by subtracting the base price from the associated price with this product, option, and/or extra. For example, if a product with a defined monogram extra costs an additional $10, the `deltaPrice `value is "10". Between options, a price for a medium may be $10 and a large $12 giving a `deltaPrice `value of "2".Refer to [Product Variant Pricing and Weight](../../../guides/catalog/products.htm#product_variant_pricing_and_weight) in the Products guides topic for more information.
	*/
	public $deltaPrice;

	/**
	*The difference between associated prices for a product, variation option, or extra that is localized per the `localeCode`. The difference is calculated by subtracting the base price from the associated price with this product, option, and/or extra. Depending on the localeCode, the price may be converted such as from USD (US Dollar) to EUR (euro).
	*/
	public $localizedDeltaPrice;

}

?>
