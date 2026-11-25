<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Refunds\ByRefund;

final class Cancel extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/refunds/{refund}/cancel',
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
     * Cancel a refund
     *
     * <p>Cancels a refund with a status of <code>requires_action</code>.</p>
     *
     * <p>You can’t cancel refunds in other states. Only refunds for payment methods that require customer action can enter the <code>requires_action</code> state.</p>
     */
    public function post(string $refund, ?\StripeSDK\Requests\V1\Refunds\ByRefund\Cancel\Post $payload = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['refund' => $refund], body: $payload);
        return $result;
    }
}
