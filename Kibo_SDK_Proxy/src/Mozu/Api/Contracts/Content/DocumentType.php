<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\Content;



/**
*	The type of documents used in the CMS such as "web_page" or "template" or "image_url".
*/
class DocumentType
{
	/**
	*The administrator name associated with the object/data.
	*/
	public $adminName;

	/**
	*Fully qualified name of the document type. 
	*/
	public $documentTypeFQN;

	/**
	*The package of document lists and content documents to be installed.
	*/
	public $installationPackage;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*The namespace for the accessible APIs and source capabilities in the core of  APIs.
	*/
	public $namespace;

	/**
	*The current version number of the order, wish list, document list, or document type list.
	*/
	public $version;

	/**
	*Metadata content for entities, used by document lists, document type lists, document type, views, entity lists, and list views.
	*/
	public $metadata;

	/**
	*Collection of property attributes defined for the object. Properties are associated to all objects within , including documents, products, and product types.
	*/
	public $properties;

}

?>
