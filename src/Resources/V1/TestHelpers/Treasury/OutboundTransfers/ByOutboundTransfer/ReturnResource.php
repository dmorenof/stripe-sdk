<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer;

final class ReturnResource extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/treasury/outbound_transfers/{outbound_transfer}/return',
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
            'returned_details' => 'nested',
        ],
    ];

    /**
     * Test mode: Return an OutboundTransfer
     *
     * <p>Transitions a test mode created OutboundTransfer to the <code>returned</code> status. The OutboundTransfer must already be in the <code>processing</code> state.</p>
     */
    public function post(string $outbound_transfer, ?\StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\ReturnResource\Post $payload = null): \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['outbound_transfer' => $outbound_transfer], body: $payload);
        return $result;
    }
}
