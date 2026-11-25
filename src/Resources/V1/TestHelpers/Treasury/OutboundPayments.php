<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Treasury;

final class OutboundPayments extends \StripeSDK\Client
{
    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/treasury/outbound_payments/{id}',
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
            'tracking_details' => 'nested',
        ],
    ];

    /**
     * Test mode: Update an OutboundPayment
     *
     * <p>Updates a test mode created OutboundPayment with tracking details. The OutboundPayment must not be cancelable, and cannot be in the <code>canceled</code> or <code>failed</code> states.</p>
     */
    public function postById(string $id, \StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundPayments\ById\Post $payload): \StripeSDK\DTOs\Treasury\OutboundPayment|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\OutboundPayment|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ID), path: ['id' => $id], body: $payload);
        return $result;
    }
}
