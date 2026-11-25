<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Climate;

final class Orders extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/climate/orders',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Climate\\Orders\\GetStatus200',
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
     * List orders
     *
     * <p>Lists all Climate order objects. The orders are returned sorted by creation date, with the
     * most recently created orders appearing first.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Climate\Orders $params = null): \StripeSDK\Responses\V1\Climate\Orders\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Climate\Orders\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/climate/orders',
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
                'type' => '\\StripeSDK\\DTOs\\Climate\\Order',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'beneficiary' => 'nested',
            'expand' => 'nested',
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Create an order
     *
     * <p>Creates a Climate order object for a given Climate product. The order will be processed immediately
     * after creation and payment will be deducted your Stripe balance.</p>
     */
    public function post(\StripeSDK\Requests\V1\Climate\Orders\Post $payload): \StripeSDK\DTOs\Climate\Order|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Climate\Order|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_ORDER = [
        'method' => 'GET',
        'path' => '/v1/climate/orders/{order}',
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
                'type' => '\\StripeSDK\\DTOs\\Climate\\Order',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'order' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an order
     *
     * <p>Retrieves the details of a Climate order object with the given ID.</p>
     */
    public function getByOrder(string $order, ?\StripeSDK\GetParams\V1\Climate\Orders\ByOrder $params = null): \StripeSDK\DTOs\Climate\Order|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Climate\Order|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ORDER), path: ['order' => $order], parameters: $params);
        return $result;
    }

    private const array POST_BY_ORDER = [
        'method' => 'POST',
        'path' => '/v1/climate/orders/{order}',
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
                'type' => '\\StripeSDK\\DTOs\\Climate\\Order',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'order' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'beneficiary' => 'nested',
            'expand' => 'nested',
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Update an order
     *
     * <p>Updates the specified order by setting the values of the parameters passed.</p>
     */
    public function postByOrder(string $order, ?\StripeSDK\Requests\V1\Climate\Orders\ByOrder\Post $payload = null): \StripeSDK\DTOs\Climate\Order|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Climate\Order|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ORDER), path: ['order' => $order], body: $payload);
        return $result;
    }
}
