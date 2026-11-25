<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Issuing;

final class Authorizations extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/issuing/authorizations',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Issuing\\Authorizations\\GetStatus200',
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
     * List all authorizations
     *
     * <p>Returns a list of Issuing <code>Authorization</code> objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Issuing\Authorizations $params = null): \StripeSDK\Responses\V1\Issuing\Authorizations\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Issuing\Authorizations\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_AUTHORIZATION = [
        'method' => 'GET',
        'path' => '/v1/issuing/authorizations/{authorization}',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Authorization',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'authorization' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an authorization
     *
     * <p>Retrieves an Issuing <code>Authorization</code> object.</p>
     */
    public function getByAuthorization(string $authorization, ?\StripeSDK\GetParams\V1\Issuing\Authorizations\ByAuthorization $params = null): \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_AUTHORIZATION), path: ['authorization' => $authorization], parameters: $params);
        return $result;
    }

    private const array POST_BY_AUTHORIZATION = [
        'method' => 'POST',
        'path' => '/v1/issuing/authorizations/{authorization}',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Authorization',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'authorization' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Update an authorization
     *
     * <p>Updates the specified Issuing <code>Authorization</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public function postByAuthorization(string $authorization, ?\StripeSDK\Requests\V1\Issuing\Authorizations\ByAuthorization\Post $payload = null): \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_AUTHORIZATION), path: ['authorization' => $authorization], body: $payload);
        return $result;
    }
}
