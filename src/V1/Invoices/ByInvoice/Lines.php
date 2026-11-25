<?php

declare(strict_types=1);

namespace StripeSDK\V1\Invoices\ByInvoice;

final class Lines extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/invoices/{invoice}/lines [operationId: GetInvoicesInvoiceLines] */
    /**
     * Retrieve an invoice's line items
     *
     * <p>When retrieving an invoice, you’ll get a <strong>lines</strong> property containing the total count of line items and the first handful of those items. There is also a URL where you can retrieve the full (paginated) list of line items.</p>
     */
    public static function get(string $invoice, ?\StripeSDK\GetParams\V1\Invoices\ByInvoice\Lines $params = null): \StripeSDK\Responses\V1\Invoices\ByInvoice\Lines\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices\ByInvoice\Lines::class)->get($invoice, $params);
    }

    /** POST /v1/invoices/{invoice}/lines/{line_item_id} [operationId: PostInvoicesInvoiceLinesLineItemId] */
    /**
     * Update an invoice's line item
     *
     * <p>Updates an invoice’s line item. Some fields, such as <code>tax_amounts</code>, only live on the invoice line item,
     * so they can only be updated through this endpoint. Other fields, such as <code>amount</code>, live on both the invoice
     * item and the invoice line item, so updates on this endpoint will propagate to the invoice item as well.
     * Updating an invoice’s line item is only possible before the invoice is finalized.</p>
     */
    public static function postByLineItemId(\StripeSDK\PathParams\V1\Invoices\ByInvoice\Lines\ByLineItemId $identifier, ?\StripeSDK\Requests\V1\Invoices\ByInvoice\Lines\ByLineItemId\Post $payload = null): \StripeSDK\DTOs\LineItem|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices\ByInvoice\Lines::class)->postByLineItemId($identifier, $payload);
    }
}
