<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Issuing\Authorizations\ByAuthorization;

final class Approve extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/issuing/authorizations/{authorization}/approve',
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
     * Approve an authorization
     *
     * <p>[Deprecated] Approves a pending Issuing <code>Authorization</code> object. This request should be made within the timeout window of the <a href="/docs/issuing/controls/real-time-authorizations">real-time authorization</a> flow.
     * This method is deprecated. Instead, <a href="/docs/issuing/controls/real-time-authorizations#authorization-handling">respond directly to the webhook request to approve an authorization</a>.</p>
     *
     * @deprecated
     */
    public function post(string $authorization, ?\StripeSDK\Requests\V1\Issuing\Authorizations\ByAuthorization\Approve\Post $payload = null): \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['authorization' => $authorization], body: $payload);
        return $result;
    }
}
