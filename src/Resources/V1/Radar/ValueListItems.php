<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Radar;

final class ValueListItems extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/radar/value_list_items',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Radar\\ValueListItems\\GetStatus200',
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
     * List all value list items
     *
     * <p>Returns a list of <code>ValueListItem</code> objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public function get(\StripeSDK\GetParams\V1\Radar\ValueListItems $params): \StripeSDK\Responses\V1\Radar\ValueListItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Radar\ValueListItems\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/radar/value_list_items',
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
                'type' => '\\StripeSDK\\DTOs\\Radar\\ValueListItem',
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
        ],
    ];

    /**
     * Create a value list item
     *
     * <p>Creates a new <code>ValueListItem</code> object, which is added to the specified parent value list.</p>
     */
    public function post(\StripeSDK\Requests\V1\Radar\ValueListItems\Post $payload): \StripeSDK\DTOs\Radar\ValueListItem|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Radar\ValueListItem|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_ITEM = [
        'method' => 'DELETE',
        'path' => '/v1/radar/value_list_items/{item}',
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
                'type' => '\\StripeSDK\\DTOs\\DeletedRadar\\ValueListItem',
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
     * Delete a value list item
     *
     * <p>Deletes a <code>ValueListItem</code> object, removing it from its parent value list.</p>
     */
    public function deleteByItem(string $item, ?\StripeSDK\Requests\V1\Radar\ValueListItems\ByItem\Delete $payload = null): \StripeSDK\DTOs\DeletedRadar\ValueListItem|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\DeletedRadar\ValueListItem|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ITEM), path: ['item' => $item], body: $payload);
        return $result;
    }

    private const array GET_BY_ITEM = [
        'method' => 'GET',
        'path' => '/v1/radar/value_list_items/{item}',
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
                'type' => '\\StripeSDK\\DTOs\\Radar\\ValueListItem',
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
     * Retrieve a value list item
     *
     * <p>Retrieves a <code>ValueListItem</code> object.</p>
     */
    public function getByItem(string $item, ?\StripeSDK\GetParams\V1\Radar\ValueListItems\ByItem $params = null): \StripeSDK\DTOs\Radar\ValueListItem|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Radar\ValueListItem|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ITEM), path: ['item' => $item], parameters: $params);
        return $result;
    }
}
