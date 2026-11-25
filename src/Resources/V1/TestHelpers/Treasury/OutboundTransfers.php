<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Treasury;

final class OutboundTransfers extends \StripeSDK\Client
{
    private const array POST_BY_OUTBOUND_TRANSFER = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/treasury/outbound_transfers/{outbound_transfer}',
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
                'type' => '\\StripeSDK\\DTOs\\Treasury\\OutboundTransfer',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'outbound_transfer' => [
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
     * Test mode: Update an OutboundTransfer
     *
     * <p>Updates a test mode created OutboundTransfer with tracking details. The OutboundTransfer must not be cancelable, and cannot be in the <code>canceled</code> or <code>failed</code> states.</p>
     */
    public function postByOutboundTransfer(string $outbound_transfer, \StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\Post $payload): \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_OUTBOUND_TRANSFER), path: ['outbound_transfer' => $outbound_transfer], body: $payload);
        return $result;
    }
}
