<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\CreditNotes;

final class Preview extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/credit_notes/preview',
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
                'type' => '\\StripeSDK\\DTOs\\Credit\\Note',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
            'lines' => 'nested',
            'metadata' => 'deepObject',
            'refunds' => 'nested',
            'shipping_cost' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Preview a credit note
     *
     * <p>Get a preview of a credit note without creating it.</p>
     */
    public function get(\StripeSDK\GetParams\V1\CreditNotes\Preview $params): \StripeSDK\DTOs\Credit\Note|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Credit\Note|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
