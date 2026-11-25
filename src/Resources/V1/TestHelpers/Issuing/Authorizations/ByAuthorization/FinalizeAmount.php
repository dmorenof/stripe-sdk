<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Issuing\Authorizations\ByAuthorization;

final class FinalizeAmount extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/issuing/authorizations/{authorization}/finalize_amount',
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
        'validation' => [
            'authorization' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'fleet' => 'nested',
            'fuel' => 'nested',
        ],
    ];

    /**
     * Finalize a test-mode authorization's amount
     *
     * <p>Finalize the amount on an Authorization prior to capture, when the initial authorization was for an estimated amount.</p>
     */
    public function post(string $authorization, \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FinalizeAmount\Post $payload): \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['authorization' => $authorization], body: $payload);
        return $result;
    }
}
