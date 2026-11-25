<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\CreditNotes\ByCreditNote;

final class Lines extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/credit_notes/{credit_note}/lines',
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
                'type' => '\\StripeSDK\\Responses\\V1\\CreditNotes\\ByCreditNote\\Lines\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'credit_note' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a credit note's line items
     *
     * <p>When retrieving a credit note, you’ll get a <strong>lines</strong> property containing the first handful of those items. There is also a URL where you can retrieve the full (paginated) list of line items.</p>
     */
    public function get(string $credit_note, ?\StripeSDK\GetParams\V1\CreditNotes\ByCreditNote\Lines $params = null): \StripeSDK\Responses\V1\CreditNotes\ByCreditNote\Lines\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\CreditNotes\ByCreditNote\Lines\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['credit_note' => $credit_note], parameters: $params);
        return $result;
    }
}
