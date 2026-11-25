<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Checkout\Sessions\BySession;

final class Expire extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/checkout/sessions/{session}/expire',
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
                'type' => '\\StripeSDK\\DTOs\\Checkout\\Session',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'session' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Expire a Checkout Session
     *
     * <p>A Checkout Session can be expired when it is in one of these statuses: <code>open</code> </p>
     *
     * <p>After it expires, a customer can’t complete a Checkout Session and customers loading the Checkout Session see a message saying the Checkout Session is expired.</p>
     */
    public function post(string $session, ?\StripeSDK\Requests\V1\Checkout\Sessions\BySession\Expire\Post $payload = null): \StripeSDK\DTOs\Checkout\Session|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Checkout\Session|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['session' => $session], body: $payload);
        return $result;
    }
}
