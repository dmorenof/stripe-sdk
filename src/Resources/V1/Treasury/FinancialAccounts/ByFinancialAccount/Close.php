<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Treasury\FinancialAccounts\ByFinancialAccount;

final class Close extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/treasury/financial_accounts/{financial_account}/close',
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
                'type' => '\\StripeSDK\\DTOs\\Treasury\\FinancialAccount',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'financial_account' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'forwarding_settings' => 'nested',
        ],
    ];

    /**
     * Close a FinancialAccount
     *
     * <p>Closes a FinancialAccount. A FinancialAccount can only be closed if it has a zero balance, has no pending InboundTransfers, and has canceled all attached Issuing cards.</p>
     */
    public function post(string $financial_account, ?\StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Close\Post $payload = null): \StripeSDK\DTOs\Treasury\FinancialAccount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\FinancialAccount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['financial_account' => $financial_account], body: $payload);
        return $result;
    }
}
