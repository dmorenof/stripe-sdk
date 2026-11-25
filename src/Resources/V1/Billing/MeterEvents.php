<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Billing;

final class MeterEvents extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/billing/meter_events',
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
                'type' => '\\StripeSDK\\DTOs\\Billing\\MeterEvent',
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
            'payload' => 'deepObject',
        ],
    ];

    /**
     * Create a billing meter event
     *
     * <p>Creates a billing meter event.</p>
     */
    public function post(\StripeSDK\Requests\V1\Billing\MeterEvents\Post $payload): \StripeSDK\DTOs\Billing\MeterEvent|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Billing\MeterEvent|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
