<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Treasury;

final class ReceivedDebits extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/treasury/received_debits',
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
                'type' => '\\StripeSDK\\DTOs\\Treasury\\ReceivedDebit',
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
            'initiating_payment_method_details' => 'nested',
        ],
    ];

    /**
     * Test mode: Create a ReceivedDebit
     *
     * <p>Use this endpoint to simulate a test mode ReceivedDebit initiated by a third party. In live mode, you can’t directly create ReceivedDebits initiated by third parties.</p>
     */
    public function post(\StripeSDK\Requests\V1\TestHelpers\Treasury\ReceivedDebits\Post $payload): \StripeSDK\DTOs\Treasury\ReceivedDebit|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\ReceivedDebit|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
