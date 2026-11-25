<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\ThreeDSecure\Authentications\ByAuthentication;

final class Submit extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/three_d_secure/authentications/{authentication}/submit',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Submit a 3DS Authentication
     *
     * <p>This endpoint submits a 3DS Authentication. You can submit a 3DS Authentication object when it has status <code>requires_submission</code>. Refer to the <a href="/payments/3d-secure/standalone-3d-secure#submit-the-3ds-authentication-object">Submit the 3DS Authentication object section of the Standalone 3DS guide</a> for more information.</p>
     */
    public function post(string $authentication, ?\StripeSDK\Requests\V1\ThreeDSecure\Authentications\ByAuthentication\Submit\Post $payload = null): \StripeSDK\DTOs\ThreeDSecure\Authentication|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ThreeDSecure\Authentication|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['authentication' => $authentication], body: $payload);
        return $result;
    }
}
