<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Invoiceitems extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/invoiceitems',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Invoiceitems\\GetStatus200',
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
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all invoice items
     *
     * <p>Returns a list of your invoice items. Invoice items are returned sorted by creation date, with the most recently created invoice items appearing first.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Invoiceitems $params = null): \StripeSDK\Responses\V1\Invoiceitems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Invoiceitems\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/invoiceitems',
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
                'type' => '\\StripeSDK\\DTOs\\Invoiceitem',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
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
            'tax_code' => 'nested',
            'tax_rates' => 'nested',
        ],
    ];

    /**
     * Create an invoice item
     *
     * <p>Creates an item to be added to a draft invoice (up to 250 items per invoice). If no invoice is specified, the item will be on the next invoice created for the customer specified.</p>
     */
    public function post(?\StripeSDK\Requests\V1\Invoiceitems\Post $payload = null): \StripeSDK\DTOs\Invoiceitem|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Invoiceitem|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_INVOICEITEM = [
        'method' => 'DELETE',
        'path' => '/v1/invoiceitems/{invoiceitem}',
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
                'type' => '\\StripeSDK\\DTOs\\Deleted\\Invoiceitem',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'invoiceitem' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Delete an invoice item
     *
     * <p>Deletes an invoice item, removing it from an invoice. Deleting invoice items is only possible when they’re not attached to invoices, or if it’s attached to a draft invoice.</p>
     */
    public function deleteByInvoiceitem(string $invoiceitem, ?\StripeSDK\Requests\V1\Invoiceitems\ByInvoiceitem\Delete $payload = null): \StripeSDK\DTOs\Deleted\Invoiceitem|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Deleted\Invoiceitem|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_INVOICEITEM), path: ['invoiceitem' => $invoiceitem], body: $payload);
        return $result;
    }

    private const array GET_BY_INVOICEITEM = [
        'method' => 'GET',
        'path' => '/v1/invoiceitems/{invoiceitem}',
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
                'type' => '\\StripeSDK\\DTOs\\Invoiceitem',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'invoiceitem' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an invoice item
     *
     * <p>Retrieves the invoice item with the given ID.</p>
     */
    public function getByInvoiceitem(string $invoiceitem, ?\StripeSDK\GetParams\V1\Invoiceitems\ByInvoiceitem $params = null): \StripeSDK\DTOs\Invoiceitem|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Invoiceitem|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_INVOICEITEM), path: ['invoiceitem' => $invoiceitem], parameters: $params);
        return $result;
    }

    private const array POST_BY_INVOICEITEM = [
        'method' => 'POST',
        'path' => '/v1/invoiceitems/{invoiceitem}',
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
                'type' => '\\StripeSDK\\DTOs\\Invoiceitem',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'invoiceitem' => [
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
            'tax_code' => 'nested',
            'tax_rates' => 'nested',
        ],
    ];

    /**
     * Update an invoice item
     *
     * <p>Updates the amount or description of an invoice item on an upcoming invoice. Updating an invoice item is only possible before the invoice it’s attached to is closed.</p>
     */
    public function postByInvoiceitem(string $invoiceitem, ?\StripeSDK\Requests\V1\Invoiceitems\ByInvoiceitem\Post $payload = null): \StripeSDK\DTOs\Invoiceitem|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Invoiceitem|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_INVOICEITEM), path: ['invoiceitem' => $invoiceitem], body: $payload);
        return $result;
    }
}
