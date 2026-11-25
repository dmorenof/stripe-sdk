<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Terminal;

final class Configurations extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/terminal/configurations',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Terminal\\Configurations\\GetStatus200',
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
     * List all Configurations
     *
     * <p>Returns a list of <code>Configuration</code> objects.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Terminal\Configurations $params = null): \StripeSDK\Responses\V1\Terminal\Configurations\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Terminal\Configurations\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/terminal/configurations',
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
                'type' => '\\StripeSDK\\DTOs\\Terminal\\Configuration',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'bbpos_wisepad3' => 'nested',
            'bbpos_wisepos_e' => 'nested',
            'cellular' => 'nested',
            'expand' => 'nested',
            'offline' => 'nested',
            'reboot_window' => 'nested',
            'stripe_s700' => 'nested',
            'stripe_s710' => 'nested',
            'tipping' => 'nested',
            'verifone_m425' => 'nested',
            'verifone_p400' => 'nested',
            'verifone_p630' => 'nested',
            'verifone_ux700' => 'nested',
            'verifone_v660p' => 'nested',
            'wifi' => 'nested',
        ],
    ];

    /**
     * Create a Configuration
     *
     * <p>Creates a new <code>Configuration</code> object.</p>
     */
    public function post(?\StripeSDK\Requests\V1\Terminal\Configurations\Post $payload = null): \StripeSDK\DTOs\Terminal\Configuration|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Terminal\Configuration|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_CONFIGURATION = [
        'method' => 'DELETE',
        'path' => '/v1/terminal/configurations/{configuration}',
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
                'type' => '\\StripeSDK\\DTOs\\DeletedTerminal\\Configuration',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'configuration' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Delete a Configuration
     *
     * <p>Deletes a <code>Configuration</code> object.</p>
     */
    public function deleteByConfiguration(string $configuration, ?\StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Delete $payload = null): \StripeSDK\DTOs\DeletedTerminal\Configuration|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\DeletedTerminal\Configuration|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_CONFIGURATION), path: ['configuration' => $configuration], body: $payload);
        return $result;
    }

    private const array GET_BY_CONFIGURATION = [
        'method' => 'GET',
        'path' => '/v1/terminal/configurations/{configuration}',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Terminal\\Configurations\\ByConfiguration\\GetStatus200\\ByConfigurationGetStatus200Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'configuration' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a Configuration
     *
     * <p>Retrieves a <code>Configuration</code> object.</p>
     */
    public function getByConfiguration(string $configuration, ?\StripeSDK\GetParams\V1\Terminal\Configurations\ByConfiguration $params = null): \StripeSDK\Responses\V1\Terminal\Configurations\ByConfiguration\GetStatus200\ByConfigurationGetStatus200Response|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Terminal\Configurations\ByConfiguration\GetStatus200\ByConfigurationGetStatus200Response|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CONFIGURATION), path: ['configuration' => $configuration], parameters: $params);
        return $result;
    }

    private const array POST_BY_CONFIGURATION = [
        'method' => 'POST',
        'path' => '/v1/terminal/configurations/{configuration}',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Terminal\\Configurations\\ByConfiguration\\PostStatus200\\ByConfigurationPostStatus200Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'configuration' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'bbpos_wisepad3' => 'nested',
            'bbpos_wisepos_e' => 'nested',
            'cellular' => 'nested',
            'expand' => 'nested',
            'offline' => 'nested',
            'reboot_window' => 'nested',
            'stripe_s700' => 'nested',
            'stripe_s710' => 'nested',
            'tipping' => 'nested',
            'verifone_m425' => 'nested',
            'verifone_p400' => 'nested',
            'verifone_p630' => 'nested',
            'verifone_ux700' => 'nested',
            'verifone_v660p' => 'nested',
            'wifi' => 'nested',
        ],
    ];

    /**
     * Update a Configuration
     *
     * <p>Updates a new <code>Configuration</code> object.</p>
     */
    public function postByConfiguration(string $configuration, ?\StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post $payload = null): \StripeSDK\Responses\V1\Terminal\Configurations\ByConfiguration\PostStatus200\ByConfigurationPostStatus200Response|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Terminal\Configurations\ByConfiguration\PostStatus200\ByConfigurationPostStatus200Response|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_CONFIGURATION), path: ['configuration' => $configuration], body: $payload);
        return $result;
    }
}
