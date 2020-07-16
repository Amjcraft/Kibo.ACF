<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\Content;



/**
*	The document properties that define the content used by the content management system (CMS).
*/
class Document
{
	/**
	*The date and time when a document was added to the document list. System-supplied and read-only.
	*/
	public $insertDate;

	/**
	*The character length allowed for the content text.
	*/
	public $contentLength;

	/**
	*The mime type associated with the document content, if applicable.
	*/
	public $contentMimeType;

	/**
	*The date and time the most recent content update was made. UTC date/time. System-supplied and read-only.
	*/
	public $contentUpdateDate;

	/**
	*Fully qualified name of the document type. 
	*/
	public $documentTypeFQN;

	/**
	*If applicable, the file extension associated with the document content. For example, the extension may be .html for an HTML web page.
	*/
	public $extension;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*The fully qualified name of the document list.
	*/
	public $listFQN;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*The name of the publish set that this document belongs to, if any.
	*/
	public $publishSetCode;

	/**
	*The current state of the document or product definition. States for documents include Active, Draft, or Latest. Active documents are published and cannot be deleted. Querying Latest returns the most recent version of the document, regardless of whether it is published or a draft. States for product include New, Draft, or Live.
	*/
	public $publishState;

	/**
	*Date and time when the entity was last updated, represented in UTC Date/Time.
	*/
	public $updateDate;

	/**
	*Mozu.Content.Contracts.Document activeDateRange ApiTypeMember DOCUMENT_HERE 
	*/
	public $activeDateRange;

	/**
	*Collection of property attributes defined for the object. Properties are associated to all objects within , including documents, products, and product types.
	*/
	public $properties;

}

?>
