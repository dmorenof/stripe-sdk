<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Invoices extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/invoices',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Invoices\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'created' => 'nested',
            'due_date' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all invoices
     *
     * <p>You can list all invoices, or list the invoices for a specific customer. The invoices are returned sorted by creation date, with the most recently created invoices appearing first.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Invoices $params = null): \StripeSDK\Responses\V1\Invoices\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Invoices\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/invoices',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'account_tax_ids' => 'nested',
            'automatic_tax' => 'nested',
            'custom_fields' => 'nested',
            'default_tax_rates' => 'nested',
            'discounts' => 'nested',
            'expand' => 'nested',
            'from_invoice' => 'nested',
            'issuer' => 'nested',
            'metadata' => 'nested',
            'payment_settings' => 'nested',
            'rendering' => 'nested',
            'shipping_cost' => 'nested',
            'shipping_details' => 'nested',
            'transfer_data' => 'nested',
        ],
    ];

    /**
     * Create an invoice
     *
     * <p>This endpoint creates a draft invoice for a given customer. The invoice remains a draft until you <a href="/api/invoices/finalize">finalize</a> the invoice, which allows you to <a href="/api/invoices/pay">pay</a> or <a href="/api/invoices/send">send</a> the invoice to your customers.</p>
     */
    public function post(?\StripeSDK\Requests\V1\Invoices\Post $payload = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_INVOICE = [
        'method' => 'DELETE',
        'path' => '/v1/invoices/{invoice}',
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
                'type' => '\\StripeSDK\\DTOs\\Deleted\\Invoice',
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
    ];

    /**
     * Delete a draft invoice
     *
     * <p>Permanently deletes a one-off invoice draft. This cannot be undone. Attempts to delete invoices that are no longer in a draft state will fail; once an invoice has been finalized or if an invoice is for a subscription, it must be <a href="/api/invoices/void">voided</a>.</p>
     */
    public function deleteByInvoice(string $invoice, ?\StripeSDK\Requests\V1\Invoices\ByInvoice\Delete $payload = null): \StripeSDK\DTOs\Deleted\Invoice|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Deleted\Invoice|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_INVOICE), path: ['invoice' => $invoice], body: $payload);
        return $result;
    }

    private const array GET_BY_INVOICE = [
        'method' => 'GET',
        'path' => '/v1/invoices/{invoice}',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an invoice
     *
     * <p>Retrieves the invoice with the given ID.</p>
     */
    public function getByInvoice(string $invoice, ?\StripeSDK\GetParams\V1\Invoices\ByInvoice $params = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_INVOICE), path: ['invoice' => $invoice], parameters: $params);
        return $result;
    }

    private const array POST_BY_INVOICE = [
        'method' => 'POST',
        'path' => '/v1/invoices/{invoice}',
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
            'account_tax_ids' => 'nested',
            'automatic_tax' => 'nested',
            'custom_fields' => 'nested',
            'default_source' => 'nested',
            'default_tax_rates' => 'nested',
            'discounts' => 'nested',
            'effective_at' => 'nested',
            'expand' => 'nested',
            'issuer' => 'nested',
            'metadata' => 'nested',
            'number' => 'nested',
            'on_behalf_of' => 'nested',
            'payment_settings' => 'nested',
            'rendering' => 'nested',
            'shipping_cost' => 'nested',
            'shipping_details' => 'nested',
            'transfer_data' => 'nested',
        ],
    ];

    /**
     * Update an invoice
     *
     * <p>Draft invoices are fully editable. Once an invoice is <a href="/docs/billing/invoices/workflow#finalized">finalized</a>,
     * you can no longer change most of its details, including monetary values and <code>collection_method</code>. For most invoices,
     * this also includes <code>description</code>.</p>
     *
     * <p>If you would like to stop the Stripe Billing engine from automatically finalizing, reattempting payments on,
     * sending reminders for, or <a href="/docs/billing/invoices/reconciliation">automatically reconciling</a> invoices, pass
     * <code>auto_advance=false</code>.</p>
     */
    public function postByInvoice(string $invoice, ?\StripeSDK\Requests\V1\Invoices\ByInvoice\Post $payload = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_INVOICE), path: ['invoice' => $invoice], body: $payload);
        return $result;
    }
}
