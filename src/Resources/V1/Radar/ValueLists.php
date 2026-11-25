<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Radar;

final class ValueLists extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/radar/value_lists',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Radar\\ValueLists\\GetStatus200',
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
     * List all value lists
     *
     * <p>Returns a list of <code>ValueList</code> objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Radar\ValueLists $params = null): \StripeSDK\Responses\V1\Radar\ValueLists\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Radar\ValueLists\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/radar/value_lists',
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
                'type' => '\\StripeSDK\\DTOs\\Radar\\ValueList',
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
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Create a value list
     *
     * <p>Creates a new <code>ValueList</code> object, which can then be referenced in rules.</p>
     */
    public function post(\StripeSDK\Requests\V1\Radar\ValueLists\Post $payload): \StripeSDK\DTOs\Radar\ValueList|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Radar\ValueList|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_VALUE_LIST = [
        'method' => 'DELETE',
        'path' => '/v1/radar/value_lists/{value_list}',
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
                'type' => '\\StripeSDK\\DTOs\\DeletedRadar\\ValueList',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'value_list' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Delete a value list
     *
     * <p>Deletes a <code>ValueList</code> object, also deleting any items contained within the value list. To be deleted, a value list must not be referenced in any rules.</p>
     */
    public function deleteByValueList(string $value_list, ?\StripeSDK\Requests\V1\Radar\ValueLists\ByValueList\Delete $payload = null): \StripeSDK\DTOs\DeletedRadar\ValueList|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\DeletedRadar\ValueList|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_VALUE_LIST), path: ['value_list' => $value_list], body: $payload);
        return $result;
    }

    private const array GET_BY_VALUE_LIST = [
        'method' => 'GET',
        'path' => '/v1/radar/value_lists/{value_list}',
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
                'type' => '\\StripeSDK\\DTOs\\Radar\\ValueList',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'value_list' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a value list
     *
     * <p>Retrieves a <code>ValueList</code> object.</p>
     */
    public function getByValueList(string $value_list, ?\StripeSDK\GetParams\V1\Radar\ValueLists\ByValueList $params = null): \StripeSDK\DTOs\Radar\ValueList|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Radar\ValueList|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_VALUE_LIST), path: ['value_list' => $value_list], parameters: $params);
        return $result;
    }

    private const array POST_BY_VALUE_LIST = [
        'method' => 'POST',
        'path' => '/v1/radar/value_lists/{value_list}',
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
                'type' => '\\StripeSDK\\DTOs\\Radar\\ValueList',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'value_list' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Update a value list
     *
     * <p>Updates a <code>ValueList</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Note that <code>item_type</code> is immutable.</p>
     */
    public function postByValueList(string $value_list, ?\StripeSDK\Requests\V1\Radar\ValueLists\ByValueList\Post $payload = null): \StripeSDK\DTOs\Radar\ValueList|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Radar\ValueList|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_VALUE_LIST), path: ['value_list' => $value_list], body: $payload);
        return $result;
    }
}
