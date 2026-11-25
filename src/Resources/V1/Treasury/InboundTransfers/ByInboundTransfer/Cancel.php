<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Treasury\InboundTransfers\ByInboundTransfer;

final class Cancel extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/treasury/inbound_transfers/{inbound_transfer}/cancel',
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
                'type' => '\\StripeSDK\\DTOs\\Treasury\\InboundTransfer',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'inbound_transfer' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Cancel an InboundTransfer
     *
     * <p>Cancels an InboundTransfer.</p>
     */
    public function post(string $inbound_transfer, ?\StripeSDK\Requests\V1\Treasury\InboundTransfers\ByInboundTransfer\Cancel\Post $payload = null): \StripeSDK\DTOs\Treasury\InboundTransfer|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\InboundTransfer|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['inbound_transfer' => $inbound_transfer], body: $payload);
        return $result;
    }
}
