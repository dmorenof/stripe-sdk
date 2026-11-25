<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Invoices\ByInvoice;

final class VoidResource extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/invoices/{invoice}/void',
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
        ],
    ];

    /**
     * Void an invoice
     *
     * <p>Mark a finalized invoice as void. This cannot be undone. Voiding an invoice is similar to <a href="/api/invoices/delete">deletion</a>, however it only applies to finalized invoices and maintains a papertrail where the invoice can still be found.</p>
     *
     * <p>Consult with local regulations to determine whether and how an invoice might be amended, canceled, or voided in the jurisdiction you’re doing business in. You might need to <a href="/api/invoices/create">issue another invoice</a> or <a href="/api/credit_notes/create">credit note</a> instead. Stripe recommends that you consult with your legal counsel for advice specific to your business.</p>
     */
    public function post(string $invoice, ?\StripeSDK\Requests\V1\Invoices\ByInvoice\VoidResource\Post $payload = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['invoice' => $invoice], body: $payload);
        return $result;
    }
}
