<?php

declare(strict_types=1);

namespace StripeSDK\V1\Customers\ByCustomer;

final class CashBalance extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/customers/{customer}/cash_balance [operationId: GetCustomersCustomerCashBalance] */
    /**
     * Retrieve a cash balance
     *
     * <p>Retrieves a customer’s cash balance.</p>
     */
    public static function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\CashBalance $params = null): \StripeSDK\DTOs\CashBalance|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\CashBalance::class)->get($customer, $params);
    }

    /** POST /v1/customers/{customer}/cash_balance [operationId: PostCustomersCustomerCashBalance] */
    /**
     * Update a cash balance's settings
     *
     * <p>Changes the settings on a customer’s cash balance.</p>
     */
    public static function post(string $customer, ?\StripeSDK\Requests\V1\Customers\ByCustomer\CashBalance\Post $payload = null): \StripeSDK\DTOs\CashBalance|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\CashBalance::class)->post($customer, $payload);
    }
}
