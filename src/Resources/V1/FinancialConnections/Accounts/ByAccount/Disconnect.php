<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\FinancialConnections\Accounts\ByAccount;

final class Disconnect extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/financial_connections/accounts/{account}/disconnect',
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
        ],
    ];

    /**
     * Disconnect an Account
     *
     * <p>Disables your access to a Financial Connections <code>Account</code>. You will no longer be able to access data associated with the account (e.g. balances, transactions).</p>
     */
    public function post(string $account, ?\StripeSDK\Requests\V1\FinancialConnections\Accounts\ByAccount\Disconnect\Post $payload = null): \StripeSDK\DTOs\FinancialConnections\Account|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\FinancialConnections\Account|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['account' => $account], body: $payload);
        return $result;
    }
}
