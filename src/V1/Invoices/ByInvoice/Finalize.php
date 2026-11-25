<?php

declare(strict_types=1);

namespace StripeSDK\V1\Invoices\ByInvoice;

final class Finalize extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/invoices/{invoice}/finalize [operationId: PostInvoicesInvoiceFinalize] */
    /**
     * Finalize an invoice
     *
     * <p>Stripe automatically finalizes drafts before sending and attempting payment on invoices. However, if you’d like to finalize a draft invoice manually, you can do so using this method.</p>
     */
    public static function post(string $invoice, ?\StripeSDK\Requests\V1\Invoices\ByInvoice\Finalize\Post $payload = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices\ByInvoice\Finalize::class)->post($invoice, $payload);
    }
}
