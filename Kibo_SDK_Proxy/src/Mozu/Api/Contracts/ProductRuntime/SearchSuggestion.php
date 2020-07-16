<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\ProductRuntime;



/**
*	Suggest product search terms to a customer based on defined queries.
*/
class SearchSuggestion
{
	/**
	*A suggested entity based on the search query. Use the SuggestionType to determine the type of entity. Could be a SearchTerm, Product, or Category
	*/
	public $suggestion;

	/**
	*The type of Suggestion (e.g. Term, Product, Category). Will be one of the values of the SuggestionTypeConst type.
	*/
	public $suggestionType;

}

?>
