<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Customers\ByCustomer;

final class FundCashBalance extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/customers/{customer}/fund_cash_balance [operationId: PostTestHelpersCustomersCustomerFundCashBalance] */
    /**
     * Fund a test mode cash balance
     *
     * <p>Create an incoming testmode bank transfer</p>
     */
    public static function post(string $customer, \StripeSDK\Requests\V1\TestHelpers\Customers\ByCustomer\FundCashBalance\Post $payload): \StripeSDK\DTOs\Customer\CashBalanceTransaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Customers\ByCustomer\FundCashBalance::class)->post($customer, $payload);
    }
}
