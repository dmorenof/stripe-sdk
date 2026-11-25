<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\ThreeDSecure;

final class Authentications extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/three_d_secure/authentications',
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
                'type' => '\\StripeSDK\\Responses\\V1\\ThreeDSecure\\Authentications\\GetStatus200',
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
     * List all 3D Secure Authentications
     *
     * <p>Returns a list of 3D Secure Authentications.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\ThreeDSecure\Authentications $params = null): \StripeSDK\Responses\V1\ThreeDSecure\Authentications\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\ThreeDSecure\Authentications\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/three_d_secure/authentications',
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
                'type' => '\\StripeSDK\\DTOs\\ThreeDSecure\\Authentication',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'acquirer_details' => 'nested',
            'channel' => 'nested',
            'expand' => 'nested',
            'flow_preference' => 'nested',
            'future_usage' => 'nested',
            'metadata' => 'nested',
            'payment_method_data' => 'nested',
            'shipping_address' => 'nested',
        ],
    ];

    /**
     * Create a 3DS Authentication
     *
     * <p>This endpoint creates a 3DS Authentication. Refer to the <a href="/payments/3d-secure/standalone-3d-secure#create-a-3ds-authentication-object">Create a 3DS Authentication object section of the Standalone 3DS guide</a> for more information.</p>
     *
     * <p>You can pass the submit parameter to automatically submit the 3DS Authentication object when you create it. Refer to the <a href="/payments/3d-secure/standalone-3d-secure#submit-at-creation">Submit at creation section of the Standalone 3DS guide</a> for more information.</p>
     */
    public function post(\StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post $payload): \StripeSDK\DTOs\ThreeDSecure\Authentication|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ThreeDSecure\Authentication|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_AUTHENTICATION = [
        'method' => 'GET',
        'path' => '/v1/three_d_secure/authentications/{authentication}',
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
                'type' => '\\StripeSDK\\DTOs\\ThreeDSecure\\Authentication',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'authentication' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a 3DS Authentication
     *
     * <p>This endpoint retrieves a 3DS Authentication.</p>
     */
    public function getByAuthentication(string $authentication, ?\StripeSDK\GetParams\V1\ThreeDSecure\Authentications\ByAuthentication $params = null): \StripeSDK\DTOs\ThreeDSecure\Authentication|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ThreeDSecure\Authentication|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_AUTHENTICATION), path: ['authentication' => $authentication], parameters: $params);
        return $result;
    }
}
