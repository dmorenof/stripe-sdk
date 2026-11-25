<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Subscriptions\BySubscription;

final class Pause extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/subscriptions/{subscription}/pause',
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
            'bill_for' => 'nested',
            'expand' => 'nested',
        ],
    ];

    /**
     * Pause a subscription
     *
     * <p>Pauses a subscription by transitioning it to the paused status. A paused subscription does not generate invoices and will not advance to new billing periods. The subscription can be resumed later using the resume endpoint. Cannot pause subscriptions with attached schedules.</p>
     */
    public function post(string $subscription, ?\StripeSDK\Requests\V1\Subscriptions\BySubscription\Pause\Post $payload = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['subscription' => $subscription], body: $payload);
        return $result;
    }
}
