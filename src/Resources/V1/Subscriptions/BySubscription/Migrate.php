<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Subscriptions\BySubscription;

final class Migrate extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/subscriptions/{subscription}/migrate',
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
                'type' => '\\StripeSDK\\DTOs\\Subscription',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'subscription' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'billing_mode' => 'nested',
            'expand' => 'nested',
        ],
    ];

    /**
     * Migrate a subscription
     *
     * <p>Upgrade the billing_mode of an existing subscription.</p>
     */
    public function post(string $subscription, \StripeSDK\Requests\V1\Subscriptions\BySubscription\Migrate\Post $payload): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['subscription' => $subscription], body: $payload);
        return $result;
    }
}
