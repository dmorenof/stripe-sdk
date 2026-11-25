<?php

declare(strict_types=1);

namespace StripeSDK\V1\Customers\ByCustomer\BankAccounts\ById;

final class Verify extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/customers/{customer}/bank_accounts/{id}/verify [operationId: PostCustomersCustomerBankAccountsIdVerify] */
    /**
     * Verify a bank account
     *
     * <p>Verify a specified bank account for a given customer.</p>
     */
    public static function post(\StripeSDK\PathParams\V1\Customers\ByCustomer\BankAccounts\ById\Verify $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\BankAccounts\ById\Verify\Post $payload = null): \StripeSDK\DTOs\BankAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\BankAccounts\ById\Verify::class)->post($identifier, $payload);
    }
}
