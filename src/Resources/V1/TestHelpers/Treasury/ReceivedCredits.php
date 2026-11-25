<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Treasury;

final class ReceivedCredits extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/treasury/received_credits',
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
                'type' => '\\StripeSDK\\DTOs\\Treasury\\ReceivedCredit',
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
     * Test mode: Create a ReceivedCredit
     *
     * <p>Use this endpoint to simulate a test mode ReceivedCredit initiated by a third party. In live mode, you can’t directly create ReceivedCredits initiated by third parties.</p>
     */
    public function post(\StripeSDK\Requests\V1\TestHelpers\Treasury\ReceivedCredits\Post $payload): \StripeSDK\DTOs\Treasury\ReceivedCredit|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\ReceivedCredit|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
