<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Tax;

final class Settings extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/tax/settings',
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
                'type' => '\\StripeSDK\\DTOs\\Tax\\Settings',
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
     * Retrieve settings
     *
     * <p>Retrieves Tax <code>Settings</code> for a merchant.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Tax\Settings $params = null): \StripeSDK\DTOs\Tax\Settings|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Tax\Settings|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/tax/settings',
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
                'type' => '\\StripeSDK\\DTOs\\Tax\\Settings',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'defaults' => 'nested',
            'expand' => 'nested',
            'head_office' => 'nested',
        ],
    ];

    /**
     * Update settings
     *
     * <p>Updates Tax <code>Settings</code> parameters used in tax calculations. All parameters are editable but none can be removed once set. Check the returned Tax <code>Settings</code> object and validate that its status is <code>active</code>.</p>
     */
    public function post(?\StripeSDK\Requests\V1\Tax\Settings\Post $payload = null): \StripeSDK\DTOs\Tax\Settings|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Tax\Settings|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
