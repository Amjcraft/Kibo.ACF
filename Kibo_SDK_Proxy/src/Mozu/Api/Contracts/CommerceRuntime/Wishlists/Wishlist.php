<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\CommerceRuntime\Wishlists;



/**
*	Properties of a shopper wish list defined for a site, associated with a customer account.
*/
class Wishlist
{
	/**
	*Code that identifies the channel associated with the site for the shopper's created shopping cart, order, and return.
	*/
	public $channelCode;

	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*Unique identifer of the customer account. This ID is used to associate numerous types of data and object with the customer account, including orders, returns, wish lists, and in-store credit.
	*/
	public $customerAccountId;

	/**
	*The type of customer interaction used to create this shopping cart. Possible values are Website, Call, Store, or Unknown.
	*/
	public $customerInteractionType;

	/**
	*The aggregate total for all items in the cart, including costs associated with shopper-defined options or extras and any applied discounts.
	*/
	public $discountedSubtotal;

	/**
	*The subtotal of the cart, order, and wishlist items, including any applied discount calculations. Wishlist subtotals may change depending on the length of time, available discounts, and stock amounts of products at the time of review by shoppers.
	*/
	public $discountedTotal;

	/**
	*Estimated amount of discounts applied to all items in the carts and orders. System-supplied and read-only. This value will be available at the wish list, cart item, order item, and wish list item level at a later time.
	*/
	public $discountTotal;

	/**
	*Date and time in UTC format when a discount, credit, wish list, or cart expires. An expired discount no longer can be redeemed. An expired wish list is no longer available. An expired credit can no longer be redeemed for a purchase. Acart becomes inactive and expired based on a system-calculated interval. For example, if an anonymous shopper has 14 days of inactivity, the cart is considered abandoned after that period of inactivity. System-supplied and read-only.
	*/
	public $expirationDate;

	/**
	*Unique identifier used by an external program to identify a  order, customer account, or wish list.
	*/
	public $externalId;

	/**
	*The monetary sum of all fees incurred in the cart, order, line item in a cart, or line item in an order. This value is not calculated for wish lists at this time.
	*/
	public $feeTotal;

	/**
	*Calculated total tax amount for handling costs if the cart/order is subject to sales tax. 
	*/
	public $handlingTaxTotal;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*The date and time an order or wish list is imported into . This is not the date and time it was created in the external application.
	*/
	public $importDate;

	/**
	*Indicates if this object/data was imported from an outside source such as a data import or synchronization via an app or service. If true, this data was originally imported into  and accessible through your store database. Examples of imported objects/data include orders and customer accounts.
	*/
	public $isImport;

	/**
	*The total amount of calculated tax for items, used by carts, orders, and wish lists.
	*/
	public $itemTaxTotal;

	/**
	*The date in UTC Date/Time when the items in the cart were last validated against the site's product catalog. System-supplied and read-only.
	*/
	public $lastValidationDate;

	/**
	*The total charge for the line item with all weighted order level manual adjustments.
	*/
	public $lineItemSubtotalWithOrderAdjustments;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*The type of privacy to apply to this wish list. Possible values are "Private" which makes the wish list viewable only to the shopper, "DirectShare" which makes the wish list viewable only to people with whom the shopper shares the wish list link, or "Public" which makes the wish list available to everyone. At this time, the system treats all shopper wish lists as "Public" regardless of the defined privacy type.
	*/
	public $privacyType;

	/**
	*The total shipping amount for the wishlist before discounts and adjustments.
	*/
	public $shippingAmountBeforeDiscountsAndAdjustments;

	/**
	*The shipping subtotal amount calculated without any applied discounts for line item and entire amounts of carts and orders. This property is not calculated for wish lists at this time.
	*/
	public $shippingSubTotal;

	/**
	*The total amount of tax incurred on the shipping charges in the cart and order. This property is not calculated at this time for wish lists.
	*/
	public $shippingTaxTotal;

	/**
	*The calculated total shipping amount estimated for carts or orders, including tax. This amount is not calculated for wish lists at this time.
	*/
	public $shippingTotal;

	/**
	*Unique identifier of the site.
	*/
	public $siteId;

	/**
	*The integer that represents the sequential order of this wish list in the customer's collection of wish lists.
	*/
	public $sortOrder;

	/**
	*Estimated amount of the cart or order without sales tax, shipping costs, and other fees. This amount is not calculated for wish lists at this time.
	*/
	public $subtotal;

	/**
	*The total monetary sum of sales tax estimated for a cart or order.
	*/
	public $taxTotal;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

	/**
	*Total is used to indicate the monetary, estimated total amount of the cart or order, including items, sales tax, shipping costs, and other fees. Totals are not estimated for wish lists at this time.
	*/
	public $total;

	/**
	*User-defined string that defines the type of wish list to define, such as wish list, baby registry, or Christmas list.
	*/
	public $typeTag;

	/**
	*System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	*/
	public $version;

	/**
	*Unique identifier of the customer visit in which the cart was created or last modified.
	*/
	public $visitId;

	/**
	*Unique identifier of the web session in which the cart, order, return, or wish list was created or last modified.
	*/
	public $webSessionId;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Collection (list or paged) of change messages logged for each modification made by a shopper to their carts, wishlists, orders, package, payment, pickup, and returns. Change log messages are system-supplied based on shopper actions and read only.
	*/
	public $changeMessages;

	/**
	*Custom data for a given vendor set within the commerce process.
	*/
	public $data;

	/**
	*Extra properties (key-value pairs) that extend the primary object. Think of this as a property bag of string keys and string values.
	*/
	public $extendedProperties;

	/**
	*Properties of the information required to fulfill the cart, order, or wish list. Shoppers can fulfill ordered items by using in-store pickup or direct shipping.
	*/
	public $fulfillmentInfo;

	/**
	*An array list of objects in the returned collection.
	*/
	public $items;

	/**
	*List of order-level discounts projected to apply to the cart at checkout or order.
	*/
	public $orderDiscounts;

}

?>
