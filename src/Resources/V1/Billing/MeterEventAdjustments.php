<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Billing;

final class MeterEventAdjustments extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/billing/meter_event_adjustments',
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
                'type' => '\\StripeSDK\\DTOs\\Billing\\MeterEventAdjustment',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'cancel' => 'nested',
            'expand' => 'nested',
        ],
    ];

    /**
     * Create a billing meter event adjustment
     *
     * <p>Creates a billing meter event adjustment.</p>
     */
    public function post(\StripeSDK\Requests\V1\Billing\MeterEventAdjustments\Post $payload): \StripeSDK\DTOs\Billing\MeterEventAdjustment|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Billing\MeterEventAdjustment|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
