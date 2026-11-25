<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Terminal;

final class Locations extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/terminal/locations',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Terminal\\Locations\\GetStatus200',
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
     * List all Locations
     *
     * <p>Returns a list of <code>Location</code> objects.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Terminal\Locations $params = null): \StripeSDK\Responses\V1\Terminal\Locations\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Terminal\Locations\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/terminal/locations',
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
                'type' => '\\StripeSDK\\DTOs\\Terminal\\Location',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'address' => 'nested',
            'address_kana' => 'nested',
            'address_kanji' => 'nested',
            'expand' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Create a Location
     *
     * <p>Creates a new <code>Location</code> object.
     * For further details, including which address fields are required in each country, see the <a href="/docs/terminal/fleet/locations">Manage locations</a> guide.</p>
     */
    public function post(?\StripeSDK\Requests\V1\Terminal\Locations\Post $payload = null): \StripeSDK\DTOs\Terminal\Location|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Terminal\Location|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_LOCATION = [
        'method' => 'DELETE',
        'path' => '/v1/terminal/locations/{location}',
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
                'type' => '\\StripeSDK\\DTOs\\DeletedTerminal\\Location',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'location' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Delete a Location
     *
     * <p>Deletes a <code>Location</code> object.</p>
     */
    public function deleteByLocation(string $location, ?\StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Delete $payload = null): \StripeSDK\DTOs\DeletedTerminal\Location|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\DeletedTerminal\Location|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_LOCATION), path: ['location' => $location], body: $payload);
        return $result;
    }

    private const array GET_BY_LOCATION = [
        'method' => 'GET',
        'path' => '/v1/terminal/locations/{location}',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Terminal\\Locations\\ByLocation\\GetStatus200\\ByLocationGetStatus200Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'location' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a Location
     *
     * <p>Retrieves a <code>Location</code> object.</p>
     */
    public function getByLocation(string $location, ?\StripeSDK\GetParams\V1\Terminal\Locations\ByLocation $params = null): \StripeSDK\Responses\V1\Terminal\Locations\ByLocation\GetStatus200\ByLocationGetStatus200Response|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Terminal\Locations\ByLocation\GetStatus200\ByLocationGetStatus200Response|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_LOCATION), path: ['location' => $location], parameters: $params);
        return $result;
    }

    private const array POST_BY_LOCATION = [
        'method' => 'POST',
        'path' => '/v1/terminal/locations/{location}',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Terminal\\Locations\\ByLocation\\PostStatus200\\ByLocationPostStatus200Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'location' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'address' => 'nested',
            'address_kana' => 'nested',
            'address_kanji' => 'nested',
            'configuration_overrides' => 'nested',
            'display_name' => 'nested',
            'display_name_kana' => 'nested',
            'display_name_kanji' => 'nested',
            'expand' => 'nested',
            'metadata' => 'nested',
            'phone' => 'nested',
        ],
    ];

    /**
     * Update a Location
     *
     * <p>Updates a <code>Location</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public function postByLocation(string $location, ?\StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Post $payload = null): \StripeSDK\Responses\V1\Terminal\Locations\ByLocation\PostStatus200\ByLocationPostStatus200Response|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Terminal\Locations\ByLocation\PostStatus200\ByLocationPostStatus200Response|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_LOCATION), path: ['location' => $location], body: $payload);
        return $result;
    }
}
