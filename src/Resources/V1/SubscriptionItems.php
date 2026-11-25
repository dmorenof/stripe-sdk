<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class SubscriptionItems extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/subscription_items',
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
                'type' => '\\StripeSDK\\Responses\\V1\\SubscriptionItems\\GetStatus200',
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
     * List all subscription items
     *
     * <p>Returns a list of your subscription items for a given subscription.</p>
     */
    public function get(\StripeSDK\GetParams\V1\SubscriptionItems $params): \StripeSDK\Responses\V1\SubscriptionItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\SubscriptionItems\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/subscription_items',
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
                'type' => '\\StripeSDK\\DTOs\\Subscription\\Item',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'billing_thresholds' => 'nested',
            'current_trial' => 'nested',
            'discounts' => 'nested',
            'expand' => 'nested',
            'metadata' => 'deepObject',
            'price_data' => 'nested',
            'tax_rates' => 'nested',
        ],
    ];

    /**
     * Create a subscription item
     *
     * <p>Adds a new item to an existing subscription. No existing items will be changed or replaced.</p>
     */
    public function post(\StripeSDK\Requests\V1\SubscriptionItems\Post $payload): \StripeSDK\DTOs\Subscription\Item|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription\Item|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_ITEM = [
        'method' => 'DELETE',
        'path' => '/v1/subscription_items/{item}',
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
                'type' => '\\StripeSDK\\DTOs\\Deleted\\SubscriptionItem',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'item' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Delete a subscription item
     *
     * <p>Deletes an item from the subscription. Removing a subscription item from a subscription will not cancel the subscription.</p>
     */
    public function deleteByItem(string $item, ?\StripeSDK\Requests\V1\SubscriptionItems\ByItem\Delete $payload = null): \StripeSDK\DTOs\Deleted\SubscriptionItem|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Deleted\SubscriptionItem|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ITEM), path: ['item' => $item], body: $payload);
        return $result;
    }

    private const array GET_BY_ITEM = [
        'method' => 'GET',
        'path' => '/v1/subscription_items/{item}',
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
                'type' => '\\StripeSDK\\DTOs\\Subscription\\Item',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'item' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a subscription item
     *
     * <p>Retrieves the subscription item with the given ID.</p>
     */
    public function getByItem(string $item, ?\StripeSDK\GetParams\V1\SubscriptionItems\ByItem $params = null): \StripeSDK\DTOs\Subscription\Item|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription\Item|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ITEM), path: ['item' => $item], parameters: $params);
        return $result;
    }

    private const array POST_BY_ITEM = [
        'method' => 'POST',
        'path' => '/v1/subscription_items/{item}',
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
                'type' => '\\StripeSDK\\DTOs\\Subscription\\Item',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'item' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'billing_thresholds' => 'nested',
            'current_trial' => 'nested',
            'discounts' => 'nested',
            'expand' => 'nested',
            'metadata' => 'nested',
            'price_data' => 'nested',
            'tax_rates' => 'nested',
        ],
    ];

    /**
     * Update a subscription item
     *
     * <p>Updates the plan or quantity of an item on a current subscription.</p>
     */
    public function postByItem(string $item, ?\StripeSDK\Requests\V1\SubscriptionItems\ByItem\Post $payload = null): \StripeSDK\DTOs\Subscription\Item|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription\Item|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ITEM), path: ['item' => $item], body: $payload);
        return $result;
    }
}
