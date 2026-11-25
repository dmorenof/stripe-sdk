<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Treasury\FinancialAccounts\ByFinancialAccount;

final class Features extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/treasury/financial_accounts/{financial_account}/features',
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
                'type' => '\\StripeSDK\\DTOs\\Treasury\\FinancialAccountFeatures',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve FinancialAccount Features
     *
     * <p>Retrieves Features information associated with the FinancialAccount.</p>
     */
    public function get(string $financial_account, ?\StripeSDK\GetParams\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features $params = null): \StripeSDK\DTOs\Treasury\FinancialAccountFeatures|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\FinancialAccountFeatures|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['financial_account' => $financial_account], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/treasury/financial_accounts/{financial_account}/features',
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
                'type' => '\\StripeSDK\\DTOs\\Treasury\\FinancialAccountFeatures',
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
            'card_issuing' => 'nested',
            'deposit_insurance' => 'nested',
            'expand' => 'nested',
            'financial_addresses' => 'nested',
            'inbound_transfers' => 'nested',
            'intra_stripe_flows' => 'nested',
            'outbound_payments' => 'nested',
            'outbound_transfers' => 'nested',
        ],
    ];

    /**
     * Update FinancialAccount Features
     *
     * <p>Updates the Features associated with a FinancialAccount.</p>
     */
    public function post(string $financial_account, ?\StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post $payload = null): \StripeSDK\DTOs\Treasury\FinancialAccountFeatures|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\FinancialAccountFeatures|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['financial_account' => $financial_account], body: $payload);
        return $result;
    }
}
