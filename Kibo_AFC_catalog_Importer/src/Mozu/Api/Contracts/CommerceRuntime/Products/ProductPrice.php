<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\CommerceRuntime\Products;



/**
*	The price of a product that appears on a storefront after any applied discounts.
*/
class ProductPrice
{
	/**
	*The credit value of the product or bundled product. When the `goodsType `is `DigitalCredit`, this value is populated to indicate the value of the credit. This is used to create store credit in the fulfillment of gift cards.
	*/
	public $creditValue;

	/**
	*The manufacturer's suggested retail price (MSRP) for the product. This content may be defined by the supplier.
	*/
	public $msrp;

	/**
	*The price the merchant charges for a product on a storefront if no sales price is defined.
	*/
	public $price;

	/**
	*If the product's price comes from a price list, this property is the code of the price list with which the product is associated.
	*/
	public $priceListCode;

	/**
	*The price list entry mode of the product. This property is for future funtionality and currently should only be .
	*/
	public $priceListEntryMode;

	/**
	*The set sale price for a product consisting of a price with a discount already applied.For price list entries, this property is the product's sale price if the  is set to .
	*/
	public $salePrice;

	/**
	*The override price defined by the tenant for this cart or order item.
	*/
	public $tenantOverridePrice;

}

?>
