<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\CreditNotes\Preview;

final class Lines extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/credit_notes/preview/lines',
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
                'type' => '\\StripeSDK\\Responses\\V1\\CreditNotes\\Preview\\Lines\\GetStatus200',
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
     * Retrieve a credit note preview's line items
     *
     * <p>When retrieving a credit note preview, you’ll get a <strong>lines</strong> property containing the first handful of those items. This URL you can retrieve the full (paginated) list of line items.</p>
     */
    public function get(\StripeSDK\GetParams\V1\CreditNotes\Preview\Lines $params): \StripeSDK\Responses\V1\CreditNotes\Preview\Lines\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\CreditNotes\Preview\Lines\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
