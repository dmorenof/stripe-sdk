<?php

declare(strict_types=1);

namespace StripeSDK\V1\Invoices\ByInvoice;

final class UpdateLines extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/invoices/{invoice}/update_lines [operationId: PostInvoicesInvoiceUpdateLines] */
    /**
     * Bulk update invoice line items
     *
     * <p>Updates multiple line items on an invoice. This is only possible when an invoice is still a draft.</p>
     */
    public static function post(string $invoice, \StripeSDK\Requests\V1\Invoices\ByInvoice\UpdateLines\Post $payload): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices\ByInvoice\UpdateLines::class)->post($invoice, $payload);
    }
}
