<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Invoices\ByInvoice;

final class Lines extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/invoices/{invoice}/lines',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Invoices\\ByInvoice\\Lines\\GetStatus200',
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
     * Retrieve an invoice's line items
     *
     * <p>When retrieving an invoice, you’ll get a <strong>lines</strong> property containing the total count of line items and the first handful of those items. There is also a URL where you can retrieve the full (paginated) list of line items.</p>
     */
    public function get(string $invoice, ?\StripeSDK\GetParams\V1\Invoices\ByInvoice\Lines $params = null): \StripeSDK\Responses\V1\Invoices\ByInvoice\Lines\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Invoices\ByInvoice\Lines\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['invoice' => $invoice], parameters: $params);
        return $result;
    }

    private const array POST_BY_LINE_ITEM_ID = [
        'method' => 'POST',
        'path' => '/v1/invoices/{invoice}/lines/{line_item_id}',
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
                'type' => '\\StripeSDK\\DTOs\\LineItem',
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
            'line_item_id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'discounts' => 'nested',
            'expand' => 'nested',
            'metadata' => 'nested',
            'period' => 'nested',
            'price_data' => 'nested',
            'pricing' => 'nested',
            'tax_amounts' => 'nested',
            'tax_rates' => 'nested',
        ],
    ];

    /**
     * Update an invoice's line item
     *
     * <p>Updates an invoice’s line item. Some fields, such as <code>tax_amounts</code>, only live on the invoice line item,
     * so they can only be updated through this endpoint. Other fields, such as <code>amount</code>, live on both the invoice
     * item and the invoice line item, so updates on this endpoint will propagate to the invoice item as well.
     * Updating an invoice’s line item is only possible before the invoice is finalized.</p>
     */
    public function postByLineItemId(\StripeSDK\PathParams\V1\Invoices\ByInvoice\Lines\ByLineItemId $identifier, ?\StripeSDK\Requests\V1\Invoices\ByInvoice\Lines\ByLineItemId\Post $payload = null): \StripeSDK\DTOs\LineItem|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\LineItem|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_LINE_ITEM_ID), path: $identifier, body: $payload);
        return $result;
    }
}
