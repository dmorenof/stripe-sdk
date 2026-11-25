<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class CustomerSessions extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/customer_sessions',
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
                'type' => '\\StripeSDK\\DTOs\\Customer\\Session',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'components' => 'nested',
            'expand' => 'nested',
        ],
    ];

    /**
     * Create a Customer Session
     *
     * <p>Creates a Customer Session object that includes a single-use client secret that you can use on your front-end to grant client-side API access for certain customer resources.</p>
     */
    public function post(\StripeSDK\Requests\V1\CustomerSessions\Post $payload): \StripeSDK\DTOs\Customer\Session|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Customer\Session|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
