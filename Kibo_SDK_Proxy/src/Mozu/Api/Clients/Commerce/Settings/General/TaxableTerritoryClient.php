<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Settings\General;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Settings\General\TaxableTerritoryUrl;


/**
* Use the taxable territories subresource to manage the regional territories for this site that are subejct to sales tax.
*/
class TaxableTerritoryClient {

	/**
	* Retrieves a list of the taxable territories configured for the site.
	*
	* @return MozuClient
	*/
	public static function getTaxableTerritoriesClient()
	{
		$url = TaxableTerritoryUrl::getTaxableTerritoriesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new territory for which to calculate sales tax.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param TaxableTerritory $taxableTerritory Properties of the territory which is subject to sales tax.
	* @return MozuClient
	*/
	public static function addTaxableTerritoryClient($taxableTerritory, $responseFields =  null)
	{
		$url = TaxableTerritoryUrl::addTaxableTerritoryUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($taxableTerritory);
		return $mozuClient;

	}
	
	/**
	* Updates one or more taxable territories configured for a site.
	*
	* @param array|TaxableTerritory $taxableterritories Properties of the territory which is subject to sales tax.
	* @return MozuClient
	*/
	public static function updateTaxableTerritoriesClient($taxableterritories)
	{
		$url = TaxableTerritoryUrl::updateTaxableTerritoriesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($taxableterritories);
		return $mozuClient;

	}
	
	
}

?>

