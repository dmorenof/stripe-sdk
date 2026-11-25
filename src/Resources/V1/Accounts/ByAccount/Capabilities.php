<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Accounts\ByAccount;

final class Capabilities extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/accounts/{account}/capabilities',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Accounts\\ByAccount\\Capabilities\\GetStatus200',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all account capabilities
     *
     * <p>Returns a list of capabilities associated with the account. The capabilities are returned sorted by creation date, with the most recent capability appearing first.</p>
     */
    public function get(string $account, ?\StripeSDK\GetParams\V1\Accounts\ByAccount\Capabilities $params = null): \StripeSDK\Responses\V1\Accounts\ByAccount\Capabilities\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Accounts\ByAccount\Capabilities\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['account' => $account], parameters: $params);
        return $result;
    }

    private const array GET_BY_CAPABILITY = [
        'method' => 'GET',
        'path' => '/v1/accounts/{account}/capabilities/{capability}',
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
                'type' => '\\StripeSDK\\DTOs\\Capability',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an Account Capability
     *
     * <p>Retrieves information about the specified Account Capability.</p>
     */
    public function getByCapability(\StripeSDK\PathParams\V1\Accounts\ByAccount\Capabilities\ByCapability $identifier, ?\StripeSDK\GetParams\V1\Accounts\ByAccount\Capabilities\ByCapability $params = null): \StripeSDK\DTOs\Capability|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Capability|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CAPABILITY), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST_BY_CAPABILITY = [
        'method' => 'POST',
        'path' => '/v1/accounts/{account}/capabilities/{capability}',
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
                'type' => '\\StripeSDK\\DTOs\\Capability',
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
     * Update an Account Capability
     *
     * <p>Updates an existing Account Capability. Request or remove a capability by updating its <code>requested</code> parameter.</p>
     */
    public function postByCapability(\StripeSDK\PathParams\V1\Accounts\ByAccount\Capabilities\ByCapability $identifier, ?\StripeSDK\Requests\V1\Accounts\ByAccount\Capabilities\ByCapability\Post $payload = null): \StripeSDK\DTOs\Capability|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Capability|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_CAPABILITY), path: $identifier, body: $payload);
        return $result;
    }
}
