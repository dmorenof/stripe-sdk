<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Charges\ByCharge;

final class Dispute extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/charges/{charge}/dispute',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * <p>Retrieve a dispute for a specified charge.</p>
     */
    public function get(string $charge, ?\StripeSDK\GetParams\V1\Charges\ByCharge\Dispute $params = null): \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['charge' => $charge], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/charges/{charge}/dispute',
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
            'evidence' => 'nested',
            'expand' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    public function post(string $charge, ?\StripeSDK\Requests\V1\Charges\ByCharge\Dispute\Post $payload = null): \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['charge' => $charge], body: $payload);
        return $result;
    }
}
