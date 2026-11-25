<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Treasury;

final class OutboundTransfers extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/treasury/outbound_transfers',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Treasury\\OutboundTransfers\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all OutboundTransfers
     *
     * <p>Returns a list of OutboundTransfers sent from the specified FinancialAccount.</p>
     */
    public function get(\StripeSDK\GetParams\V1\Treasury\OutboundTransfers $params): \StripeSDK\Responses\V1\Treasury\OutboundTransfers\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Treasury\OutboundTransfers\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/treasury/outbound_transfers',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'destination_payment_method_data' => 'nested',
            'destination_payment_method_options' => 'nested',
            'expand' => 'nested',
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Create an OutboundTransfer
     *
     * <p>Creates an OutboundTransfer.</p>
     */
    public function post(\StripeSDK\Requests\V1\Treasury\OutboundTransfers\Post $payload): \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_OUTBOUND_TRANSFER = [
        'method' => 'GET',
        'path' => '/v1/treasury/outbound_transfers/{outbound_transfer}',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an OutboundTransfer
     *
     * <p>Retrieves the details of an existing OutboundTransfer by passing the unique OutboundTransfer ID from either the OutboundTransfer creation request or OutboundTransfer list.</p>
     */
    public function getByOutboundTransfer(string $outbound_transfer, ?\StripeSDK\GetParams\V1\Treasury\OutboundTransfers\ByOutboundTransfer $params = null): \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_OUTBOUND_TRANSFER), path: ['outbound_transfer' => $outbound_transfer], parameters: $params);
        return $result;
    }
}
