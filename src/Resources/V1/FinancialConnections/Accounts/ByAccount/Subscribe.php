<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\FinancialConnections\Accounts\ByAccount;

final class Subscribe extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/financial_connections/accounts/{account}/subscribe',
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
                'type' => '\\StripeSDK\\DTOs\\FinancialConnections\\Account',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'account' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'features' => 'nested',
        ],
    ];

    /**
     * Subscribe to data refreshes for an Account
     *
     * <p>Subscribes to periodic refreshes of data associated with a Financial Connections <code>Account</code>. When the account status is active, data is typically refreshed once a day.</p>
     */
    public function post(string $account, \StripeSDK\Requests\V1\FinancialConnections\Accounts\ByAccount\Subscribe\Post $payload): \StripeSDK\DTOs\FinancialConnections\Account|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\FinancialConnections\Account|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['account' => $account], body: $payload);
        return $result;
    }
}
