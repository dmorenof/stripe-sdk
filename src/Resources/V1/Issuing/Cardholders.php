<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Issuing;

final class Cardholders extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/issuing/cardholders',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Issuing\\Cardholders\\GetStatus200',
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
     * List all cardholders
     *
     * <p>Returns a list of Issuing <code>Cardholder</code> objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Issuing\Cardholders $params = null): \StripeSDK\Responses\V1\Issuing\Cardholders\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Issuing\Cardholders\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/issuing/cardholders',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Cardholder',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'billing' => 'nested',
            'company' => 'nested',
            'expand' => 'nested',
            'individual' => 'nested',
            'metadata' => 'deepObject',
            'preferred_locales' => 'nested',
            'spending_controls' => 'nested',
        ],
    ];

    /**
     * Create a cardholder
     *
     * <p>Creates a new Issuing <code>Cardholder</code> object that can be issued cards.</p>
     */
    public function post(\StripeSDK\Requests\V1\Issuing\Cardholders\Post $payload): \StripeSDK\DTOs\Issuing\Cardholder|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Cardholder|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_CARDHOLDER = [
        'method' => 'GET',
        'path' => '/v1/issuing/cardholders/{cardholder}',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Cardholder',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'cardholder' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a cardholder
     *
     * <p>Retrieves an Issuing <code>Cardholder</code> object.</p>
     */
    public function getByCardholder(string $cardholder, ?\StripeSDK\GetParams\V1\Issuing\Cardholders\ByCardholder $params = null): \StripeSDK\DTOs\Issuing\Cardholder|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Cardholder|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CARDHOLDER), path: ['cardholder' => $cardholder], parameters: $params);
        return $result;
    }

    private const array POST_BY_CARDHOLDER = [
        'method' => 'POST',
        'path' => '/v1/issuing/cardholders/{cardholder}',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Cardholder',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'cardholder' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'billing' => 'nested',
            'company' => 'nested',
            'expand' => 'nested',
            'individual' => 'nested',
            'metadata' => 'deepObject',
            'preferred_locales' => 'nested',
            'spending_controls' => 'nested',
        ],
    ];

    /**
     * Update a cardholder
     *
     * <p>Updates the specified Issuing <code>Cardholder</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public function postByCardholder(string $cardholder, ?\StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post $payload = null): \StripeSDK\DTOs\Issuing\Cardholder|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Cardholder|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_CARDHOLDER), path: ['cardholder' => $cardholder], body: $payload);
        return $result;
    }
}
