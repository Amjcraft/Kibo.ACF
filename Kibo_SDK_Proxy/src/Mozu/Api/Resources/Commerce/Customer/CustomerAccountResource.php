<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Customer;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Customer\CustomerAccountClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use the Customer Accounts resource to manage the components of shopper accounts, including attributes, contact information, company notes, and groups associated with the customer account.
*/
class CustomerAccountResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of customer accounts.
	*
	* @param string $fields The fields to include in the response.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param bool $isAnonymous If true, retrieve anonymous shopper accounts in the response.
	* @param int $pageSize 
	* @param string $q A list of order search terms (not phrases) to use in the query when searching across order number and the name or email of the billing contact. When entering, separate multiple search terms with a space character.
	* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return CustomerAccountCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getAccounts($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $fields =  null, $q =  null, $qLimit =  null, $isAnonymous =  null, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::getAccountsClient($startIndex, $pageSize, $sortBy, $filter, $fields, $q, $qLimit, $isAnonymous, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of customer accounts.
	*
	* @param string $fields The fields to include in the response.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param bool $isAnonymous If true, retrieve anonymous shopper accounts in the response.
	* @param int $pageSize 
	* @param string $q A list of order search terms (not phrases) to use in the query when searching across order number and the name or email of the billing contact. When entering, separate multiple search terms with a space character.
	* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getAccountsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $fields =  null, $q =  null, $qLimit =  null, $isAnonymous =  null, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::getAccountsClient($startIndex, $pageSize, $sortBy, $filter, $fields, $q, $qLimit, $isAnonymous, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the current login state of the customer account specified in the request.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return LoginState 
	* @deprecated deprecated since version 1.17
	*/
	public function getLoginState($accountId, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::getLoginStateClient($accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the current login state of the customer account specified in the request.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getLoginStateAsync($accountId, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::getLoginStateClient($accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieve details of a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CustomerAccount 
	* @deprecated deprecated since version 1.17
	*/
	public function getAccount($accountId, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::getAccountClient($accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieve details of a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getAccountAsync($accountId, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::getAccountClient($accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new customer account based on the information specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerAccount $account Properties of the customer account.
	* @return CustomerAccount 
	* @deprecated deprecated since version 1.17
	*/
	public function addAccount($account, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::addAccountClient($account, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new customer account based on the information specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function addAccountAsync($account, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::addAccountClient($account, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Modifies the password associated with a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param bool $unlockAccount Specifies whether to unlock the specified customer account.
	* @param PasswordInfo $passwordInfo The information required to modify a shopper account password.
	* @deprecated deprecated since version 1.17
	*/
	public function changePassword($passwordInfo, $accountId, $unlockAccount =  null)
	{
		$mozuClient = CustomerAccountClient::changePasswordClient($passwordInfo, $accountId, $unlockAccount);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Modifies the password associated with a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param bool $unlockAccount Specifies whether to unlock the specified customer account.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function changePasswordAsync($passwordInfo, $accountId, $unlockAccount =  null)
	{
		$mozuClient = CustomerAccountClient::changePasswordClient($passwordInfo, $accountId, $unlockAccount);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Adds a new user login to a defined customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerLoginInfo $customerAuthInfo The login information for a customer account.
	* @return CustomerAuthTicket 
	* @deprecated deprecated since version 1.17
	*/
	public function addLoginToExistingCustomer($customerAuthInfo, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::addLoginToExistingCustomerClient($customerAuthInfo, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Adds a new user login to a defined customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function addLoginToExistingCustomerAsync($customerAuthInfo, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::addLoginToExistingCustomerClient($customerAuthInfo, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the customer lifetime value of the specified customer account in the event of an order import or a lifetime value calculation error.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @deprecated deprecated since version 1.17
	*/
	public function recomputeCustomerLifetimeValue($accountId)
	{
		$mozuClient = CustomerAccountClient::recomputeCustomerLifetimeValueClient($accountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Updates the customer lifetime value of the specified customer account in the event of an order import or a lifetime value calculation error.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function recomputeCustomerLifetimeValueAsync($accountId)
	{
		$mozuClient = CustomerAccountClient::recomputeCustomerLifetimeValueClient($accountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Lock or unlock a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param bool $isLocked If true, the customer account is locked from logging in.
	* @deprecated deprecated since version 1.17
	*/
	public function setLoginLocked($isLocked, $accountId)
	{
		$mozuClient = CustomerAccountClient::setLoginLockedClient($isLocked, $accountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Lock or unlock a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function setLoginLockedAsync($isLocked, $accountId)
	{
		$mozuClient = CustomerAccountClient::setLoginLockedClient($isLocked, $accountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Requires the password for the customer account to be changed.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param bool $isPasswordChangeRequired If true, the password for the customer account must be changed.
	* @deprecated deprecated since version 1.17
	*/
	public function setPasswordChangeRequired($isPasswordChangeRequired, $accountId)
	{
		$mozuClient = CustomerAccountClient::setPasswordChangeRequiredClient($isPasswordChangeRequired, $accountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Requires the password for the customer account to be changed.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function setPasswordChangeRequiredAsync($isPasswordChangeRequired, $accountId)
	{
		$mozuClient = CustomerAccountClient::setPasswordChangeRequiredClient($isPasswordChangeRequired, $accountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new customer account and logs the user associated with the customer account into the site.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerAccountAndAuthInfo $accountAndAuthInfo The authentication information associated with a customer account. The data includes the account properties such as the name, username, authorization access, and email address, the required password to match, and indicates if the account was imported from a third party resource. 
	* @return CustomerAuthTicket 
	* @deprecated deprecated since version 1.17
	*/
	public function addAccountAndLogin($accountAndAuthInfo, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::addAccountAndLoginClient($accountAndAuthInfo, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new customer account and logs the user associated with the customer account into the site.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function addAccountAndLoginAsync($accountAndAuthInfo, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::addAccountAndLoginClient($accountAndAuthInfo, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates multiple customer accounts based on the information specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param array|CustomerAccountAndAuthInfo $customers The authentication information associated with a customer account. The data includes the account properties such as the name, username, authorization access, and email address, the required password to match, and indicates if the account was imported from a third party resource. 
	* @return CustomerAccountCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function addAccounts($customers, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::addAccountsClient($customers, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates multiple customer accounts based on the information specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function addAccountsAsync($customers, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::addAccountsClient($customers, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Changes a collection of customer account passwords.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param AccountPasswordInfoCollection $accountPasswordInfos The details of the changed customer account passwords.
	* @return ChangePasswordResultCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function changePasswords($accountPasswordInfos, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::changePasswordsClient($accountPasswordInfos, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Changes a collection of customer account passwords.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function changePasswordsAsync($accountPasswordInfos, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::changePasswordsClient($accountPasswordInfos, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the current login state of a customer account by providing the customer's email address.
	*
	* @param string $customerSetCode The unique idenfitier of the customer set.
	* @param string $emailAddress The email address associated with the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return LoginState 
	* @deprecated deprecated since version 1.17
	*/
	public function getLoginStateByEmailAddress($emailAddress, $customerSetCode =  null, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::getLoginStateByEmailAddressClient($emailAddress, $customerSetCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the current login state of a customer account by providing the customer's email address.
	*
	* @param string $customerSetCode The unique idenfitier of the customer set.
	* @param string $emailAddress The email address associated with the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getLoginStateByEmailAddressAsync($emailAddress, $customerSetCode =  null, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::getLoginStateByEmailAddressClient($emailAddress, $customerSetCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the current login state of a customer account by providing the user name associated with the customer account.
	*
	* @param string $customerSetCode The unique idenfitier of the customer set.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userName The user name associated with the customer account.
	* @return LoginState 
	* @deprecated deprecated since version 1.17
	*/
	public function getLoginStateByUserName($userName, $customerSetCode =  null, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::getLoginStateByUserNameClient($userName, $customerSetCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the current login state of a customer account by providing the user name associated with the customer account.
	*
	* @param string $customerSetCode The unique idenfitier of the customer set.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userName The user name associated with the customer account.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getLoginStateByUserNameAsync($userName, $customerSetCode =  null, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::getLoginStateByUserNameClient($userName, $customerSetCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a list of customer purchase order accounts according to according to any specified sort options.
	*
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return CustomerPurchaseOrderAccountCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getCustomersPurchaseOrderAccounts($startIndex =  null, $pageSize =  null, $sortBy =  null, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::getCustomersPurchaseOrderAccountsClient($startIndex, $pageSize, $sortBy, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of customer purchase order accounts according to according to any specified sort options.
	*
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getCustomersPurchaseOrderAccountsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::getCustomersPurchaseOrderAccountsClient($startIndex, $pageSize, $sortBy, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Resets the password for a customer account.
	*
	* @param ResetPasswordInfo $resetPasswordInfo Information required to reset the password for a customer account.
	* @deprecated deprecated since version 1.17
	*/
	public function resetPassword($resetPasswordInfo)
	{
		$mozuClient = CustomerAccountClient::resetPasswordClient($resetPasswordInfo);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Resets the password for a customer account.
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function resetPasswordAsync($resetPasswordInfo)
	{
		$mozuClient = CustomerAccountClient::resetPasswordClient($resetPasswordInfo);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerAccount $account Properties of the customer account.
	* @return CustomerAccount 
	* @deprecated deprecated since version 1.17
	*/
	public function updateAccount($account, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::updateAccountClient($account, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updateAccountAsync($account, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerAccountClient::updateAccountClient($account, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes a customer account. A customer account cannot be deleted if any orders exist, past or present.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteAccount($accountId)
	{
		$mozuClient = CustomerAccountClient::deleteAccountClient($accountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes a customer account. A customer account cannot be deleted if any orders exist, past or present.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function deleteAccountAsync($accountId)
	{
		$mozuClient = CustomerAccountClient::deleteAccountClient($accountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

