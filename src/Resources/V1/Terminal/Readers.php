<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Terminal;

final class Readers extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/terminal/readers',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Terminal\\Readers\\GetStatus200',
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
     * List all Readers
     *
     * <p>Returns a list of <code>Reader</code> objects.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Terminal\Readers $params = null): \StripeSDK\Responses\V1\Terminal\Readers\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Terminal\Readers\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/terminal/readers',
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
                'type' => '\\StripeSDK\\DTOs\\Terminal\\Reader',
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
            'metadata' => 'nested',
        ],
    ];

    /**
     * Create a Reader
     *
     * <p>Creates a new <code>Reader</code> object.</p>
     */
    public function post(\StripeSDK\Requests\V1\Terminal\Readers\Post $payload): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_READER = [
        'method' => 'DELETE',
        'path' => '/v1/terminal/readers/{reader}',
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
                'type' => '\\StripeSDK\\DTOs\\DeletedTerminal\\Reader',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'reader' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Delete a Reader
     *
     * <p>Deletes a <code>Reader</code> object.</p>
     */
    public function deleteByReader(string $reader, ?\StripeSDK\Requests\V1\Terminal\Readers\ByReader\Delete $payload = null): \StripeSDK\DTOs\DeletedTerminal\Reader|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\DeletedTerminal\Reader|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_READER), path: ['reader' => $reader], body: $payload);
        return $result;
    }

    private const array GET_BY_READER = [
        'method' => 'GET',
        'path' => '/v1/terminal/readers/{reader}',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Terminal\\Readers\\ByReader\\GetStatus200\\ByReaderGetStatus200Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'reader' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a Reader
     *
     * <p>Retrieves a <code>Reader</code> object.</p>
     */
    public function getByReader(string $reader, ?\StripeSDK\GetParams\V1\Terminal\Readers\ByReader $params = null): \StripeSDK\Responses\V1\Terminal\Readers\ByReader\GetStatus200\ByReaderGetStatus200Response|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Terminal\Readers\ByReader\GetStatus200\ByReaderGetStatus200Response|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_READER), path: ['reader' => $reader], parameters: $params);
        return $result;
    }

    private const array POST_BY_READER = [
        'method' => 'POST',
        'path' => '/v1/terminal/readers/{reader}',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Terminal\\Readers\\ByReader\\PostStatus200\\ByReaderPostStatus200Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'reader' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'label' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Update a Reader
     *
     * <p>Updates a <code>Reader</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public function postByReader(string $reader, ?\StripeSDK\Requests\V1\Terminal\Readers\ByReader\Post $payload = null): \StripeSDK\Responses\V1\Terminal\Readers\ByReader\PostStatus200\ByReaderPostStatus200Response|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Terminal\Readers\ByReader\PostStatus200\ByReaderPostStatus200Response|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_READER), path: ['reader' => $reader], body: $payload);
        return $result;
    }
}
