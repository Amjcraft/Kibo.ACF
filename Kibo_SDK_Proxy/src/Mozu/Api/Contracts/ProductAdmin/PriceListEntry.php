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
*	The details of the price list entry.
*/
class PriceListEntry
{
	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry cost ApiTypeMember DOCUMENT_HERE 
	*/
	public $cost;

	/**
	*Specifies whether the product's cost is the default catalog cost or is overridden. If this property is set to ,  cannot not be null.This property has the following valid values:* * 
	*/
	public $costMode;

	/**
	*The localized currency code for the monetary amount. 
	*/
	public $currencyCode;

	/**
	*Indicates if the discount is restricted. If true, the system cannot apply any discounts to this product. Discount restrictions are defined at the master catalog level. Client administrators cannot override discount restrictions at the catalog level, but they can limit the restriction to a defined time interval.For price list entries, specifies whether discounts are restricted for the specific entry if  is set to .Refer to [Discount Restriction](../../../guides/catalog/price-lists.htm#discountrestriction) in the Price Lists guides topic for more information.
	*/
	public $discountsRestricted;

	/**
	*The date and time on which the discount restriction period ends.
	*/
	public $discountsRestrictedEndDate;

	/**
	*Specifies whether to use the default catalog setting for discount restriction, or to override the default catalog setting.Refer to [Discount Restriction](https://www.mozu.com/docs/guides/catalog/price-lists.htm#discountrestriction) in the Price Lists guides topic for more information.This property has the following valid values:* * 
	*/
	public $discountsRestrictedMode;

	/**
	*The date and time on which the discount restriction period starts.
	*/
	public $discountsRestrictedStartDate;

	/**
	*Specifies the date in UTC format when the price list entry is no longer in effect. This property is optional.
	*/
	public $endDate;

	/**
	*Specifies whether the product in the price list entry is a product variant.Refer to [Configurable Products with Options](https://www.mozu.com/docs/guides/catalog/price-lists.htm#product_variants) in the Price Lists guides topic for more information.
	*/
	public $isVariation;

	/**
	*The minimum advertised price (MAP) of the product, if  is set to .
	*/
	public $map;

	/**
	*The date the price list entry's map is no longer in effect.
	*/
	public $mapEndDate;

	/**
	*Specifies whether to use the product's default catalog map, or to override the product's default catalog map.This property has the following valid values:* * 
	*/
	public $mapMode;

	/**
	*The date the price list entry's map takes effect.
	*/
	public $mapStartDate;

	/**
	*The manufacturer's suggested retail price (MSRP) for the product. This content may be defined by the supplier.
	*/
	public $msrp;

	/**
	*Specifies whether to use the product's default catalog msrp, or to override the product's default catalog msrp.
	*/
	public $msrpMode;

	/**
	*External unique identifier of the Price List. Must be unique an only contain url sanitized characters. The max length is 50.
	*/
	public $priceListCode;

	/**
	*This property is for future price list functionality and currently should always be .
	*/
	public $priceListEntryMode;

	/**
	*This property is used for referencing the price list entry. Read-only.
	*/
	public $priceListEntrySequence;

	/**
	*The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	*/
	public $productCode;

	/**
	*The name of the product that represents a line item in a taxable order or product bundle.
	*/
	public $productName;

	/**
	*Specifies the date and time in UTC format when the price list entry is in effect.
	*/
	public $startDate;

	/**
	*Basic audit info about the object, including date, time, and user account. This data may be captured when creating, updating, and removing data.
	*/
	public $auditInfo;

	/**
	*A list of product extras associated with the price list entry.Refer to [Extras](https://www.mozu.com/docs/guides/catalog/price-lists.htm#extras) in the Price Lists guides topic for more information.
	*/
	public $extraEntries;

	/**
	*List of option attributes configured for an object. These values are associated and used by products, product bundles, and product types.
	*/
	public $options;

	/**
	*A list of product pricing information associated with the price list entry.
	*/
	public $priceEntries;

}

?>
