<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Issuing\Transactions;

final class CreateUnlinkedRefund extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/issuing/transactions/create_unlinked_refund',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Transaction',
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
            'merchant_data' => 'nested',
            'purchase_details' => 'nested',
        ],
    ];

    /**
     * Create a test-mode unlinked refund
     *
     * <p>Allows the user to refund an arbitrary amount, also known as a unlinked refund.</p>
     */
    public function post(\StripeSDK\Requests\V1\TestHelpers\Issuing\Transactions\CreateUnlinkedRefund\Post $payload): \StripeSDK\DTOs\Issuing\Transaction|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Transaction|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
