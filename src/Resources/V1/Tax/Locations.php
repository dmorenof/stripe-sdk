<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Tax;

final class Locations extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/tax/locations',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Tax\\Locations\\GetStatus200',
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
     * List tax locations
     *
     * <p>Retrieve a list of all tax locations. Tax locations can represent the venues for services, tickets, or other product types.</p>
     *
     * <p>The response includes detailed information for each tax location, such as its address, type, and description.</p>
     *
     * <p>You can paginate through the list by using the <code>limit</code> parameter to control the number of results returned in each request.</p>
     */
    public function get(\StripeSDK\GetParams\V1\Tax\Locations $params): \StripeSDK\Responses\V1\Tax\Locations\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Tax\Locations\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/tax/locations',
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
                'type' => '\\StripeSDK\\DTOs\\Tax\\Location',
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
            'expand' => 'nested',
        ],
    ];

    /**
     * Create a tax location
     *
     * <p>Create a tax location to use in calculating taxes for a service, ticket, or other type of product. The resulting object contains the ID, address, type, and description of the tax location.</p>
     */
    public function post(\StripeSDK\Requests\V1\Tax\Locations\Post $payload): \StripeSDK\DTOs\Tax\Location|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Tax\Location|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_LOCATION = [
        'method' => 'GET',
        'path' => '/v1/tax/locations/{location}',
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
                'type' => '\\StripeSDK\\DTOs\\Tax\\Location',
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
     * Retrieve a tax location
     *
     * <p>Fetch the details of a specific tax location using its unique identifier. Use a tax location to calculate taxes based on the location of the end product, such as a performance, instead of the customer address. For more details, check the <a href="https://docs.stripe.com/tax/tax-for-tickets/integration-guide">integration guide</a>.</p>
     */
    public function getByLocation(string $location, ?\StripeSDK\GetParams\V1\Tax\Locations\ByLocation $params = null): \StripeSDK\DTOs\Tax\Location|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Tax\Location|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_LOCATION), path: ['location' => $location], parameters: $params);
        return $result;
    }
}
