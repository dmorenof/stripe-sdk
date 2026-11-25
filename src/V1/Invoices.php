<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Invoices extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/invoices [operationId: GetInvoices] */
    /**
     * List all invoices
     *
     * <p>You can list all invoices, or list the invoices for a specific customer. The invoices are returned sorted by creation date, with the most recently created invoices appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Invoices $params = null): \StripeSDK\Responses\V1\Invoices\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices::class)->get($params);
    }

    /** POST /v1/invoices [operationId: PostInvoices] */
    /**
     * Create an invoice
     *
     * <p>This endpoint creates a draft invoice for a given customer. The invoice remains a draft until you <a href="/api/invoices/finalize">finalize</a> the invoice, which allows you to <a href="/api/invoices/pay">pay</a> or <a href="/api/invoices/send">send</a> the invoice to your customers.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Invoices\Post $payload = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices::class)->post($payload);
    }

    /** DELETE /v1/invoices/{invoice} [operationId: DeleteInvoicesInvoice] */
    /**
     * Delete a draft invoice
     *
     * <p>Permanently deletes a one-off invoice draft. This cannot be undone. Attempts to delete invoices that are no longer in a draft state will fail; once an invoice has been finalized or if an invoice is for a subscription, it must be <a href="/api/invoices/void">voided</a>.</p>
     */
    public static function deleteByInvoice(string $invoice, ?\StripeSDK\Requests\V1\Invoices\ByInvoice\Delete $payload = null): \StripeSDK\DTOs\Deleted\Invoice|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices::class)->deleteByInvoice($invoice, $payload);
    }

    /** GET /v1/invoices/{invoice} [operationId: GetInvoicesInvoice] */
    /**
     * Retrieve an invoice
     *
     * <p>Retrieves the invoice with the given ID.</p>
     */
    public static function getByInvoice(string $invoice, ?\StripeSDK\GetParams\V1\Invoices\ByInvoice $params = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices::class)->getByInvoice($invoice, $params);
    }

    /** POST /v1/invoices/{invoice} [operationId: PostInvoicesInvoice] */
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
    public static function postByInvoice(string $invoice, ?\StripeSDK\Requests\V1\Invoices\ByInvoice\Post $payload = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices::class)->postByInvoice($invoice, $payload);
    }
}
