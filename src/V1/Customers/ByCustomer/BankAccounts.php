<?php

declare(strict_types=1);

namespace StripeSDK\V1\Customers\ByCustomer;

final class BankAccounts extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/customers/{customer}/bank_accounts [operationId: GetCustomersCustomerBankAccounts] */
    /**
     * List all bank accounts
     *
     * <p>You can see a list of the bank accounts belonging to a Customer. Note that the 10 most recent sources are always available by default on the Customer. If you need more than those 10, you can use this API method and the <code>limit</code> and <code>starting_after</code> parameters to page through additional bank accounts.</p>
     *
     * @deprecated
     */
    public static function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\BankAccounts $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\BankAccounts\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\BankAccounts::class)->get($customer, $params);
    }

    /** POST /v1/customers/{customer}/bank_accounts [operationId: PostCustomersCustomerBankAccounts] */
    /**
     * Create a card
     *
     * <p>When you create a new credit card, you must specify a customer or recipient on which to create it.</p>
     *
     * <p>If the card’s owner has no default card, then the new card will become the default.
     * However, if the owner already has a default, then it will not change.
     * To change the default, you should <a href="/api/customers/update">update the customer</a> to have a new <code>default_source</code>.</p>
     */
    public static function post(string $customer, ?\StripeSDK\Requests\V1\Customers\ByCustomer\BankAccounts\Post $payload = null): \StripeSDK\DTOs\Payment\AnyOfSource|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\BankAccounts::class)->post($customer, $payload);
    }

    /** DELETE /v1/customers/{customer}/bank_accounts/{id} [operationId: DeleteCustomersCustomerBankAccountsId] */
    /**
     * Delete a customer source
     *
     * <p>Delete a specified source for a given customer.</p>
     */
    public static function deleteById(\StripeSDK\PathParams\V1\Customers\ByCustomer\BankAccounts\ById $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\BankAccounts\ById\Delete $payload = null): \StripeSDK\Responses\V1\Customers\ByCustomer\BankAccounts\ById\DeleteStatus200\ByIdDeleteStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\BankAccounts::class)->deleteById($identifier, $payload);
    }

    /** GET /v1/customers/{customer}/bank_accounts/{id} [operationId: GetCustomersCustomerBankAccountsId] */
    /**
     * Retrieve a bank account
     *
     * <p>By default, you can see the 10 most recent sources stored on a Customer directly on the object, but you can also retrieve details about a specific bank account stored on the Stripe account.</p>
     *
     * @deprecated
     */
    public static function getById(\StripeSDK\PathParams\V1\Customers\ByCustomer\BankAccounts\ById $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\BankAccounts\ById $params = null): \StripeSDK\DTOs\BankAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\BankAccounts::class)->getById($identifier, $params);
    }

    /** POST /v1/customers/{customer}/bank_accounts/{id} [operationId: PostCustomersCustomerBankAccountsId] */
    /**
     * Update a card
     *
     * <p>Update a specified source for a given customer.</p>
     */
    public static function postById(\StripeSDK\PathParams\V1\Customers\ByCustomer\BankAccounts\ById $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\BankAccounts\ById\Post $payload = null): \StripeSDK\Responses\V1\Customers\ByCustomer\BankAccounts\ById\PostStatus200\ByIdPostStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\BankAccounts::class)->postById($identifier, $payload);
    }
}
