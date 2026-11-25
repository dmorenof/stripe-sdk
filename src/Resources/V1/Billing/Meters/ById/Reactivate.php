<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Billing\Meters\ById;

final class Reactivate extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/billing/meters/{id}/reactivate',
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
                'type' => '\\StripeSDK\\DTOs\\Billing\\Meter',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Reactivate a billing meter
     *
     * <p>When a meter is reactivated, events for this meter can be accepted and you can attach the meter to a price.</p>
     */
    public function post(string $id, ?\StripeSDK\Requests\V1\Billing\Meters\ById\Reactivate\Post $payload = null): \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }
}
