<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Sources extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/sources',
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
                'type' => '\\StripeSDK\\DTOs\\Source',
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
            'mandate' => 'nested',
            'metadata' => 'deepObject',
            'owner' => 'nested',
            'receiver' => 'nested',
            'redirect' => 'nested',
            'source_order' => 'nested',
        ],
    ];

    /**
     * Create a source
     *
     * <p>Creates a new source object.</p>
     */
    public function post(?\StripeSDK\Requests\V1\Sources\Post $payload = null): \StripeSDK\DTOs\Source|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Source|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_SOURCE = [
        'method' => 'GET',
        'path' => '/v1/sources/{source}',
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
                'type' => '\\StripeSDK\\DTOs\\Source',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'source' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a source
     *
     * <p>Retrieves an existing source object. Supply the unique source ID from a source creation request and Stripe will return the corresponding up-to-date source object information.</p>
     */
    public function getBySource(string $source, ?\StripeSDK\GetParams\V1\Sources\BySource $params = null): \StripeSDK\DTOs\Source|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Source|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SOURCE), path: ['source' => $source], parameters: $params);
        return $result;
    }

    private const array POST_BY_SOURCE = [
        'method' => 'POST',
        'path' => '/v1/sources/{source}',
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
                'type' => '\\StripeSDK\\DTOs\\Source',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'source' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'mandate' => 'nested',
            'metadata' => 'nested',
            'owner' => 'nested',
            'source_order' => 'nested',
        ],
    ];

    /**
     * Update a source
     *
     * <p>Updates the specified source by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     *
     * <p>This request accepts the <code>metadata</code> and <code>owner</code> as arguments. It is also possible to update type specific information for selected payment methods. Please refer to our <a href="/docs/sources">payment method guides</a> for more detail.</p>
     */
    public function postBySource(string $source, ?\StripeSDK\Requests\V1\Sources\BySource\Post $payload = null): \StripeSDK\DTOs\Source|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Source|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_SOURCE), path: ['source' => $source], body: $payload);
        return $result;
    }
}
