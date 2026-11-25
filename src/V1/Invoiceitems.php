<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Invoiceitems extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/invoiceitems [operationId: GetInvoiceitems] */
    /**
     * List all invoice items
     *
     * <p>Returns a list of your invoice items. Invoice items are returned sorted by creation date, with the most recently created invoice items appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Invoiceitems $params = null): \StripeSDK\Responses\V1\Invoiceitems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoiceitems::class)->get($params);
    }

    /** POST /v1/invoiceitems [operationId: PostInvoiceitems] */
    /**
     * Create an invoice item
     *
     * <p>Creates an item to be added to a draft invoice (up to 250 items per invoice). If no invoice is specified, the item will be on the next invoice created for the customer specified.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Invoiceitems\Post $payload = null): \StripeSDK\DTOs\Invoiceitem|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoiceitems::class)->post($payload);
    }

    /** DELETE /v1/invoiceitems/{invoiceitem} [operationId: DeleteInvoiceitemsInvoiceitem] */
    /**
     * Delete an invoice item
     *
     * <p>Deletes an invoice item, removing it from an invoice. Deleting invoice items is only possible when they’re not attached to invoices, or if it’s attached to a draft invoice.</p>
     */
    public static function deleteByInvoiceitem(string $invoiceitem, ?\StripeSDK\Requests\V1\Invoiceitems\ByInvoiceitem\Delete $payload = null): \StripeSDK\DTOs\Deleted\Invoiceitem|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoiceitems::class)->deleteByInvoiceitem($invoiceitem, $payload);
    }

    /** GET /v1/invoiceitems/{invoiceitem} [operationId: GetInvoiceitemsInvoiceitem] */
    /**
     * Retrieve an invoice item
     *
     * <p>Retrieves the invoice item with the given ID.</p>
     */
    public static function getByInvoiceitem(string $invoiceitem, ?\StripeSDK\GetParams\V1\Invoiceitems\ByInvoiceitem $params = null): \StripeSDK\DTOs\Invoiceitem|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoiceitems::class)->getByInvoiceitem($invoiceitem, $params);
    }

    /** POST /v1/invoiceitems/{invoiceitem} [operationId: PostInvoiceitemsInvoiceitem] */
    /**
     * Update an invoice item
     *
     * <p>Updates the amount or description of an invoice item on an upcoming invoice. Updating an invoice item is only possible before the invoice it’s attached to is closed.</p>
     */
    public static function postByInvoiceitem(string $invoiceitem, ?\StripeSDK\Requests\V1\Invoiceitems\ByInvoiceitem\Post $payload = null): \StripeSDK\DTOs\Invoiceitem|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoiceitems::class)->postByInvoiceitem($invoiceitem, $payload);
    }
}
