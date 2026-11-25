<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\BillingPortal;

final class Configurations extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/billing_portal/configurations',
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
                'type' => '\\StripeSDK\\Responses\\V1\\BillingPortal\\Configurations\\GetStatus200',
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
     * List portal configurations
     *
     * <p>Returns a list of configurations that describe the functionality of the customer portal.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\BillingPortal\Configurations $params = null): \StripeSDK\Responses\V1\BillingPortal\Configurations\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\BillingPortal\Configurations\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/billing_portal/configurations',
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
                'type' => '\\StripeSDK\\DTOs\\BillingPortal\\Configuration',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'business_profile' => 'nested',
            'default_return_url' => 'nested',
            'expand' => 'nested',
            'features' => 'nested',
            'login_page' => 'nested',
            'metadata' => 'deepObject',
            'name' => 'nested',
        ],
    ];

    /**
     * Create a portal configuration
     *
     * <p>Creates a configuration that describes the functionality and behavior of a PortalSession</p>
     */
    public function post(\StripeSDK\Requests\V1\BillingPortal\Configurations\Post $payload): \StripeSDK\DTOs\BillingPortal\Configuration|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\BillingPortal\Configuration|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_CONFIGURATION = [
        'method' => 'GET',
        'path' => '/v1/billing_portal/configurations/{configuration}',
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
                'type' => '\\StripeSDK\\DTOs\\BillingPortal\\Configuration',
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
     * Retrieve a portal configuration
     *
     * <p>Retrieves a configuration that describes the functionality of the customer portal.</p>
     */
    public function getByConfiguration(string $configuration, ?\StripeSDK\GetParams\V1\BillingPortal\Configurations\ByConfiguration $params = null): \StripeSDK\DTOs\BillingPortal\Configuration|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\BillingPortal\Configuration|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CONFIGURATION), path: ['configuration' => $configuration], parameters: $params);
        return $result;
    }

    private const array POST_BY_CONFIGURATION = [
        'method' => 'POST',
        'path' => '/v1/billing_portal/configurations/{configuration}',
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
                'type' => '\\StripeSDK\\DTOs\\BillingPortal\\Configuration',
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
            'business_profile' => 'nested',
            'default_return_url' => 'nested',
            'expand' => 'nested',
            'features' => 'nested',
            'login_page' => 'nested',
            'metadata' => 'nested',
            'name' => 'nested',
        ],
    ];

    /**
     * Update a portal configuration
     *
     * <p>Updates a configuration that describes the functionality of the customer portal.</p>
     */
    public function postByConfiguration(string $configuration, ?\StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post $payload = null): \StripeSDK\DTOs\BillingPortal\Configuration|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\BillingPortal\Configuration|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_CONFIGURATION), path: ['configuration' => $configuration], body: $payload);
        return $result;
    }
}
