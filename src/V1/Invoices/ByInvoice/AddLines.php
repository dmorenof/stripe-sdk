<?php

declare(strict_types=1);

namespace StripeSDK\V1\Invoices\ByInvoice;

final class AddLines extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/invoices/{invoice}/add_lines [operationId: PostInvoicesInvoiceAddLines] */
    /**
     * Bulk add invoice line items
     *
     * <p>Adds multiple line items to an invoice. This is only possible when an invoice is still a draft.</p>
     */
    public static function post(string $invoice, \StripeSDK\Requests\V1\Invoices\ByInvoice\AddLines\Post $payload): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices\ByInvoice\AddLines::class)->post($invoice, $payload);
    }
}
