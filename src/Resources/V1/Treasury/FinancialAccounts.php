<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Treasury;

final class FinancialAccounts extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/treasury/financial_accounts',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Treasury\\FinancialAccounts\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'created' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all FinancialAccounts
     *
     * <p>Returns a list of FinancialAccounts.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Treasury\FinancialAccounts $params = null): \StripeSDK\Responses\V1\Treasury\FinancialAccounts\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Treasury\FinancialAccounts\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/treasury/financial_accounts',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'features' => 'nested',
            'metadata' => 'deepObject',
            'nickname' => 'nested',
            'platform_restrictions' => 'nested',
            'supported_currencies' => 'nested',
        ],
    ];

    /**
     * Create a FinancialAccount
     *
     * <p>Creates a new FinancialAccount. Each connected account can have up to three FinancialAccounts by default.</p>
     */
    public function post(\StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post $payload): \StripeSDK\DTOs\Treasury\FinancialAccount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\FinancialAccount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_FINANCIAL_ACCOUNT = [
        'method' => 'GET',
        'path' => '/v1/treasury/financial_accounts/{financial_account}',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a FinancialAccount
     *
     * <p>Retrieves the details of a FinancialAccount.</p>
     */
    public function getByFinancialAccount(string $financial_account, ?\StripeSDK\GetParams\V1\Treasury\FinancialAccounts\ByFinancialAccount $params = null): \StripeSDK\DTOs\Treasury\FinancialAccount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\FinancialAccount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_FINANCIAL_ACCOUNT), path: ['financial_account' => $financial_account], parameters: $params);
        return $result;
    }

    private const array POST_BY_FINANCIAL_ACCOUNT = [
        'method' => 'POST',
        'path' => '/v1/treasury/financial_accounts/{financial_account}',
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
            'features' => 'nested',
            'forwarding_settings' => 'nested',
            'metadata' => 'deepObject',
            'nickname' => 'nested',
            'platform_restrictions' => 'nested',
        ],
    ];

    /**
     * Update a FinancialAccount
     *
     * <p>Updates the details of a FinancialAccount.</p>
     */
    public function postByFinancialAccount(string $financial_account, ?\StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post $payload = null): \StripeSDK\DTOs\Treasury\FinancialAccount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\FinancialAccount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_FINANCIAL_ACCOUNT), path: ['financial_account' => $financial_account], body: $payload);
        return $result;
    }
}
