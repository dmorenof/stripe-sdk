<?php

declare(strict_types=1);

namespace StripeSDK\V1\Customers\ByCustomer;

final class FundingInstructions extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/customers/{customer}/funding_instructions [operationId: PostCustomersCustomerFundingInstructions] */
    /**
     * Create or retrieve funding instructions for a customer cash balance
     *
     * <p>Retrieve funding instructions for a customer cash balance. If funding instructions do not yet exist for the customer, new
     * funding instructions will be created. If funding instructions have already been created for a given customer, the same
     * funding instructions will be retrieved. In other words, we will return the same funding instructions each time.</p>
     */
    public static function post(string $customer, \StripeSDK\Requests\V1\Customers\ByCustomer\FundingInstructions\Post $payload): \StripeSDK\DTOs\FundingInstructions|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\FundingInstructions::class)->post($customer, $payload);
    }
}
