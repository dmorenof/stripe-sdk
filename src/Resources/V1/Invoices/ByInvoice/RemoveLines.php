<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Invoices\ByInvoice;

final class RemoveLines extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/invoices/{invoice}/remove_lines',
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
                'type' => '\\StripeSDK\\DTOs\\Invoice',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'invoice' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'invoice_metadata' => 'nested',
            'lines' => 'nested',
        ],
    ];

    /**
     * Bulk remove invoice line items
     *
     * <p>Removes multiple line items from an invoice. This is only possible when an invoice is still a draft.</p>
     */
    public function post(string $invoice, \StripeSDK\Requests\V1\Invoices\ByInvoice\RemoveLines\Post $payload): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['invoice' => $invoice], body: $payload);
        return $result;
    }
}
