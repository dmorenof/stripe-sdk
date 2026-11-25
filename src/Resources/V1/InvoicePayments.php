<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class InvoicePayments extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/invoice_payments',
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
                'type' => '\\StripeSDK\\Responses\\V1\\InvoicePayments\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'created' => 'nested',
            'expand' => 'nested',
            'payment' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all payments for an invoice
     *
     * <p>When retrieving an invoice, there is an includable payments property containing the first handful of those items. There is also a URL where you can retrieve the full (paginated) list of payments.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\InvoicePayments $params = null): \StripeSDK\Responses\V1\InvoicePayments\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\InvoicePayments\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_INVOICE_PAYMENT = [
        'method' => 'GET',
        'path' => '/v1/invoice_payments/{invoice_payment}',
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
                'type' => '\\StripeSDK\\DTOs\\Invoice\\Payment',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'invoice_payment' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an InvoicePayment
     *
     * <p>Retrieves the invoice payment with the given ID.</p>
     */
    public function getByInvoicePayment(string $invoice_payment, ?\StripeSDK\GetParams\V1\InvoicePayments\ByInvoicePayment $params = null): \StripeSDK\DTOs\Invoice\Payment|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Invoice\Payment|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_INVOICE_PAYMENT), path: ['invoice_payment' => $invoice_payment], parameters: $params);
        return $result;
    }
}
