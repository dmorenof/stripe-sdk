<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\SetupIntents\ByIntent;

final class VerifyMicrodeposits extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/setup_intents/{intent}/verify_microdeposits',
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
                'type' => '\\StripeSDK\\DTOs\\Setup\\Intent',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'intent' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'amounts' => 'nested',
            'expand' => 'nested',
        ],
    ];

    /**
     * Verify microdeposits on a SetupIntent
     *
     * <p>Verifies microdeposits on a SetupIntent object.</p>
     */
    public function post(string $intent, ?\StripeSDK\Requests\V1\SetupIntents\ByIntent\VerifyMicrodeposits\Post $payload = null): \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['intent' => $intent], body: $payload);
        return $result;
    }
}
