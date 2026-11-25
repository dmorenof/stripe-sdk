<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\ThreeDSecure\Authentications\ByAuthentication;

final class Cancel extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/three_d_secure/authentications/{authentication}/cancel',
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
     * Cancel a 3DS Authentication
     *
     * <p>This endpoint cancels a 3DS Authentication. You can cancel a 3DS Authentication object when it’s in a non-final status:
     * <code>requires_submission</code> or <code>requires_challenge</code>.</p>
     */
    public function post(string $authentication, ?\StripeSDK\Requests\V1\ThreeDSecure\Authentications\ByAuthentication\Cancel\Post $payload = null): \StripeSDK\DTOs\ThreeDSecure\Authentication|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ThreeDSecure\Authentication|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['authentication' => $authentication], body: $payload);
        return $result;
    }
}
