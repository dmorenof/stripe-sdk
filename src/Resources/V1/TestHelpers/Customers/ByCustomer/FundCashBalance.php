<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Customers\ByCustomer;

final class FundCashBalance extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/customers/{customer}/fund_cash_balance',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\Customer\\CashBalanceTransaction',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Fund a test mode cash balance
     *
     * <p>Create an incoming testmode bank transfer</p>
     */
    public function post(string $customer, \StripeSDK\Requests\V1\TestHelpers\Customers\ByCustomer\FundCashBalance\Post $payload): \StripeSDK\DTOs\Customer\CashBalanceTransaction|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Customer\CashBalanceTransaction|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['customer' => $customer], body: $payload);
        return $result;
    }
}
