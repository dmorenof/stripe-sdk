<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Charges\ByCharge\Dispute;

final class Close extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/charges/{charge}/dispute/close',
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
                'type' => '\\StripeSDK\\DTOs\\Dispute',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'charge' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    public function post(string $charge, ?\StripeSDK\Requests\V1\Charges\ByCharge\Dispute\Close\Post $payload = null): \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['charge' => $charge], body: $payload);
        return $result;
    }
}
