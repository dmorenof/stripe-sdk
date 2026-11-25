<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Issuing;

final class Authorizations extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/issuing/authorizations',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Authorization',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'amount_details' => 'nested',
            'expand' => 'nested',
            'fleet' => 'nested',
            'fuel' => 'nested',
            'merchant_data' => 'nested',
            'network_data' => 'nested',
            'risk_assessment' => 'nested',
            'verification_data' => 'nested',
        ],
    ];

    /**
     * Create a test-mode authorization
     *
     * <p>Create a test-mode authorization.</p>
     */
    public function post(\StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post $payload): \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
