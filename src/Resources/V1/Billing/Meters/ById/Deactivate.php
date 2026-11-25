<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Billing\Meters\ById;

final class Deactivate extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/billing/meters/{id}/deactivate',
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
     * Deactivate a billing meter
     *
     * <p>When a meter is deactivated, no more meter events will be accepted for this meter. You can’t attach a deactivated meter to a price.</p>
     */
    public function post(string $id, ?\StripeSDK\Requests\V1\Billing\Meters\ById\Deactivate\Post $payload = null): \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }
}
