<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Refunds\ByRefund;

final class Expire extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/refunds/{refund}/expire',
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
                'type' => '\\StripeSDK\\DTOs\\Refund',
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
     * Expire a pending refund.
     *
     * <p>Expire a refund with a status of <code>requires_action</code>.</p>
     */
    public function post(string $refund, ?\StripeSDK\Requests\V1\TestHelpers\Refunds\ByRefund\Expire\Post $payload = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['refund' => $refund], body: $payload);
        return $result;
    }
}
