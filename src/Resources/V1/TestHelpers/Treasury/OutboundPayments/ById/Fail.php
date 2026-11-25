<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Treasury\OutboundPayments\ById;

final class Fail extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/treasury/outbound_payments/{id}/fail',
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
                'type' => '\\StripeSDK\\DTOs\\Treasury\\OutboundPayment',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Test mode: Fail an OutboundPayment
     *
     * <p>Transitions a test mode created OutboundPayment to the <code>failed</code> status. The OutboundPayment must already be in the <code>processing</code> state.</p>
     */
    public function post(string $id, ?\StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundPayments\ById\Fail\Post $payload = null): \StripeSDK\DTOs\Treasury\OutboundPayment|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\OutboundPayment|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }
}
