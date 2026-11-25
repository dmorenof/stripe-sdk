<?php

declare(strict_types=1);

namespace StripeSDK\V1\Invoices\ByInvoice;

final class VoidResource extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/invoices/{invoice}/void [operationId: PostInvoicesInvoiceVoid] */
    /**
     * Void an invoice
     *
     * <p>Mark a finalized invoice as void. This cannot be undone. Voiding an invoice is similar to <a href="/api/invoices/delete">deletion</a>, however it only applies to finalized invoices and maintains a papertrail where the invoice can still be found.</p>
     *
     * <p>Consult with local regulations to determine whether and how an invoice might be amended, canceled, or voided in the jurisdiction you’re doing business in. You might need to <a href="/api/invoices/create">issue another invoice</a> or <a href="/api/credit_notes/create">credit note</a> instead. Stripe recommends that you consult with your legal counsel for advice specific to your business.</p>
     */
    public static function post(string $invoice, ?\StripeSDK\Requests\V1\Invoices\ByInvoice\VoidResource\Post $payload = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices\ByInvoice\VoidResource::class)->post($invoice, $payload);
    }
}
