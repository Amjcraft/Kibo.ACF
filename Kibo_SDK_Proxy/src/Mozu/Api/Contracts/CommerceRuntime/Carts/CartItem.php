<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\CommerceRuntime\Carts;



/**
*	Properties of an item added to an active shopping cart.
*/
class CartItem
{
	/**
	*The adjusted subtotal of the line item, including all manual adjustments, discounts, shipping charges and discounts, and duty or any other additional line item fees.
	*/
	public $adjustedLineItemSubtotal;

	/**
	*The subtotal of the cart, order, and wishlist items, including any applied discount calculations. Wishlist subtotals may change depending on the length of time, available discounts, and stock amounts of products at the time of review by shoppers.
	*/
	public $discountedTotal;

	/**
	*Estimated amount of discounts applied to all items in the carts and orders. System-supplied and read-only. This value will be available at the wish list, cart item, order item, and wish list item level at a later time.
	*/
	public $discountTotal;

	/**
	*Represents the total price of the cart item extended to the shopper. This begins with the Unit Price, then uses any of the following prices if they are defined, in the following order: Override Amount, Sale Amount, List Amount. This value is not calculated for wish lists at this time.
	*/
	public $extendedTotal;

	/**
	*The monetary sum of all fees incurred in the cart, order, line item in a cart, or line item in an order. This value is not calculated for wish lists at this time.
	*/
	public $feeTotal;

	/**
	*The code that identifies the location used to fulfill the cart/cart item or order/order item. This code can include physical store locations for in-store pickup, warehouse locations providing the products for shipment, or the location for the digital file(s).
	*/
	public $fulfillmentLocationCode;

	/**
	*The method used to fulfill this cart or order item. The method includes direct ship or in-store pickup. The available methods depend on the supported fulfillment types for the product. 
	*/
	public $fulfillmentMethod;

	/**
	*The combined price for all handling costs calculated together for shipped orders, not for digital or in-store pickup. This includes all handling costs per the product line items and options, excluding taxes and discounts. 
	*/
	public $handlingAmount;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*Indicates if the product in a cart, order, or wish list is purchased on a recurring schedule. If true, the item can be purchased or fulfilled at regular intervals, such as a monthly billing cycle. For example, digital or physical product subscriptions are recurring cart items. This property is not used at this time and is reserved for future functionality.
	*/
	public $isRecurring;

	/**
	*Indicates if the item is subject to taxation, used by products, options, extras, cart and order items, line items, and wish lists. If true, the entity is subject to tax based on the relevant tax rate and rules.
	*/
	public $isTaxable;

	/**
	*The total amount of calculated tax for items, used by carts, orders, and wish lists.
	*/
	public $itemTaxTotal;

	/**
	*The line id assigned to the order item. Visible only in the Admin, this is set from the Admin or in CommerceRuntime when a cart is converted to an order.
	*/
	public $lineId;

	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $localeCode;

	/**
	*The specified quantity of objects and items. This property is used for numerous object types including products, options, components within a product bundle, cart and order items, returned items, shipping line items, items in a digital product. and items associated with types and reservations.
	*/
	public $quantity;

	/**
	*The total shipping amount for the line item before discounts and adjustments.
	*/
	public $shippingAmountBeforeDiscountsAndAdjustments;

	/**
	*The total amount of tax incurred on the shipping charges in the cart and order. This property is not calculated at this time for wish lists.
	*/
	public $shippingTaxTotal;

	/**
	*The calculated total shipping amount estimated for carts or orders, including tax. This amount is not calculated for wish lists at this time.
	*/
	public $shippingTotal;

	/**
	*Estimated amount of the cart or order without sales tax, shipping costs, and other fees. This amount is not calculated for wish lists at this time.
	*/
	public $subtotal;

	/**
	*The monetary amount of an item in the cart that is subject to tax. This amount typically represents the line item subtotal before applied discounts for an order.
	*/
	public $taxableTotal;

	/**
	*Total is used to indicate the monetary, estimated total amount of the cart or order, including items, sales tax, shipping costs, and other fees. Totals are not estimated for wish lists at this time.
	*/
	public $total;

	/**
	*The total charge for the line item without any weighted order level shipping and handling charges.
	*/
	public $totalWithoutWeightedShippingAndHandling;

	/**
	*The total charge for the line item with all weighted order level shipping and handling charges.
	*/
	public $totalWithWeightedShippingAndHandling;

	/**
	*The total weighted order level manual adjustment amount.
	*/
	public $weightedOrderAdjustment;

	/**
	*The total weighted order level discount amount.
	*/
	public $weightedOrderDiscount;

	/**
	*The total weighted order level duty charges.
	*/
	public $weightedOrderDuty;

	/**
	*The amount to adjust the order handling fee.
	*/
	public $weightedOrderHandlingAdjustment;

	/**
	*The total weighted order level handling fee amount.
	*/
	public $weightedOrderHandlingFee;

	/**
	*The total weighted order handling fee discount amount.
	*/
	public $weightedOrderHandlingFeeDiscount;

	/**
	*The total weighted order level handling fee tax amount.
	*/
	public $weightedOrderHandlingFeeTax;

	/**
	*The total weighted order level shipping charge.
	*/
	public $weightedOrderShipping;

	/**
	*The total weighted order level shipping discount amount.
	*/
	public $weightedOrderShippingDiscount;

	/**
	*The total weighted order level shipping manual adjustment amount.
	*/
	public $weightedOrderShippingManualAdjustment;

	/**
	*The total weighted order level shipping tax amount.
	*/
	public $weightedOrderShippingTax;

	/**
	*The total weighted order level tax amount.
	*/
	public $weightedOrderTax;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Custom data for a given vendor set within the commerce process.
	*/
	public $data;

	/**
	*The properties of a product, referenced and used by carts, orders, wish lists, and returns.
	*/
	public $product;

	/**
	*The applicable product discount for an associated cart, order, or wish list. 
	*/
	public $productDiscount;

	/**
	*List of product-level discounts projected to apply to a cart, order, or wish list.
	*/
	public $productDiscounts;

	/**
	*List of shipping discounts projected to apply to carts, orders, and wish lists and items at checkout.
	*/
	public $shippingDiscounts;

	/**
	*Properties of the price per unit of a product, associated with cart and order items. This price is not used for wish lists at this time.
	*/
	public $unitPrice;

}

?>
