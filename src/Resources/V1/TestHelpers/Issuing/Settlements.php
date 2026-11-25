<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Issuing;

final class Settlements extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/issuing/settlements',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Settlement',
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
        ],
    ];

    /**
     * Create a test-mode settlement
     *
     * <p>Allows the user to create an Issuing settlement.</p>
     */
    public function post(\StripeSDK\Requests\V1\TestHelpers\Issuing\Settlements\Post $payload): \StripeSDK\DTOs\Issuing\Settlement|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Settlement|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
