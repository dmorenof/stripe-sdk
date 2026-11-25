<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class BalanceSettings extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/balance_settings',
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
                'type' => '\\StripeSDK\\DTOs\\Balance\\Settings',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve balance settings
     *
     * <p>Retrieves balance settings for a given connected account.
     *  Related guide: <a href="/connect/authentication">Making API calls for connected accounts</a></p>
     */
    public function get(?\StripeSDK\GetParams\V1\BalanceSettings $params = null): \StripeSDK\DTOs\Balance\Settings|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Balance\Settings|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/balance_settings',
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
                'type' => '\\StripeSDK\\DTOs\\Balance\\Settings',
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
            'payments' => 'nested',
        ],
    ];

    /**
     * Update balance settings
     *
     * <p>Updates balance settings for a given connected account.
     *  Related guide: <a href="/connect/authentication">Making API calls for connected accounts</a></p>
     */
    public function post(?\StripeSDK\Requests\V1\BalanceSettings\Post $payload = null): \StripeSDK\DTOs\Balance\Settings|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Balance\Settings|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
