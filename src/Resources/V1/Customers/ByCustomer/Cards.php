<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Customers\ByCustomer;

final class Cards extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/customers/{customer}/cards',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Customers\\ByCustomer\\Cards\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all cards
     *
     * <p>You can see a list of the cards belonging to a customer.
     * Note that the 10 most recent sources are always available on the <code>Customer</code> object.
     * If you need more than those 10, you can use this API method and the <code>limit</code> and <code>starting_after</code> parameters to page through additional cards.</p>
     *
     * @deprecated
     */
    public function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Cards $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\Cards\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Customers\ByCustomer\Cards\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['customer' => $customer], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/customers/{customer}/cards',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\AnyOfSource',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'bank_account' => 'nested',
            'card' => 'nested',
            'expand' => 'nested',
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Create a card
     *
     * <p>When you create a new credit card, you must specify a customer or recipient on which to create it.</p>
     *
     * <p>If the card’s owner has no default card, then the new card will become the default.
     * However, if the owner already has a default, then it will not change.
     * To change the default, you should <a href="/api/customers/update">update the customer</a> to have a new <code>default_source</code>.</p>
     */
    public function post(string $customer, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Cards\Post $payload = null): \StripeSDK\DTOs\Payment\AnyOfSource|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\AnyOfSource|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['customer' => $customer], body: $payload);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/v1/customers/{customer}/cards/{id}',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Customers\\ByCustomer\\Cards\\ById\\DeleteStatus200\\ByIdDeleteStatus200Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Delete a customer source
     *
     * <p>Delete a specified source for a given customer.</p>
     */
    public function deleteById(\StripeSDK\PathParams\V1\Customers\ByCustomer\Cards\ById $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Cards\ById\Delete $payload = null): \StripeSDK\Responses\V1\Customers\ByCustomer\Cards\ById\DeleteStatus200\ByIdDeleteStatus200Response|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Customers\ByCustomer\Cards\ById\DeleteStatus200\ByIdDeleteStatus200Response|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ID), path: $identifier, body: $payload);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v1/customers/{customer}/cards/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\Card',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
            'id' => [
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
     * <p>You can always see the 10 most recent cards directly on a customer; this method lets you retrieve details about a specific card stored on the customer.</p>
     *
     * @deprecated
     */
    public function getById(\StripeSDK\PathParams\V1\Customers\ByCustomer\Cards\ById $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Cards\ById $params = null): \StripeSDK\DTOs\Card|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Card|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v1/customers/{customer}/cards/{id}',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Customers\\ByCustomer\\Cards\\ById\\PostStatus200\\ByIdPostStatus200Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'nested',
            'owner' => 'nested',
        ],
    ];

    /**
     * Update a card
     *
     * <p>Update a specified source for a given customer.</p>
     */
    public function postById(\StripeSDK\PathParams\V1\Customers\ByCustomer\Cards\ById $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Cards\ById\Post $payload = null): \StripeSDK\Responses\V1\Customers\ByCustomer\Cards\ById\PostStatus200\ByIdPostStatus200Response|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Customers\ByCustomer\Cards\ById\PostStatus200\ByIdPostStatus200Response|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ID), path: $identifier, body: $payload);
        return $result;
    }
}
