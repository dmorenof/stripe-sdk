<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Issuing;

final class Cards extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/issuing/cards',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Issuing\\Cards\\GetStatus200',
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
     * List all cards
     *
     * <p>Returns a list of Issuing <code>Card</code> objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Issuing\Cards $params = null): \StripeSDK\Responses\V1\Issuing\Cards\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Issuing\Cards\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/issuing/cards',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Card',
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
            'lifecycle_controls' => 'nested',
            'metadata' => 'deepObject',
            'pin' => 'nested',
            'second_line' => 'nested',
            'shipping' => 'nested',
            'spending_controls' => 'nested',
        ],
    ];

    /**
     * Create a card
     *
     * <p>Creates an Issuing <code>Card</code> object.</p>
     */
    public function post(\StripeSDK\Requests\V1\Issuing\Cards\Post $payload): \StripeSDK\DTOs\Issuing\Card|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Card|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_CARD = [
        'method' => 'GET',
        'path' => '/v1/issuing/cards/{card}',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Card',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'card' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a card
     *
     * <p>Retrieves an Issuing <code>Card</code> object.</p>
     */
    public function getByCard(string $card, ?\StripeSDK\GetParams\V1\Issuing\Cards\ByCard $params = null): \StripeSDK\DTOs\Issuing\Card|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Card|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CARD), path: ['card' => $card], parameters: $params);
        return $result;
    }

    private const array POST_BY_CARD = [
        'method' => 'POST',
        'path' => '/v1/issuing/cards/{card}',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Card',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'card' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'nested',
            'pin' => 'nested',
            'shipping' => 'nested',
            'spending_controls' => 'nested',
        ],
    ];

    /**
     * Update a card
     *
     * <p>Updates the specified Issuing <code>Card</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public function postByCard(string $card, ?\StripeSDK\Requests\V1\Issuing\Cards\ByCard\Post $payload = null): \StripeSDK\DTOs\Issuing\Card|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Card|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_CARD), path: ['card' => $card], body: $payload);
        return $result;
    }
}
