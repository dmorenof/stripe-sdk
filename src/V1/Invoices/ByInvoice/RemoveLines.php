<?php

declare(strict_types=1);

namespace StripeSDK\V1\Invoices\ByInvoice;

final class RemoveLines extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/invoices/{invoice}/remove_lines [operationId: PostInvoicesInvoiceRemoveLines] */
    /**
     * Bulk remove invoice line items
     *
     * <p>Removes multiple line items from an invoice. This is only possible when an invoice is still a draft.</p>
     */
    public static function post(string $invoice, \StripeSDK\Requests\V1\Invoices\ByInvoice\RemoveLines\Post $payload): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices\ByInvoice\RemoveLines::class)->post($invoice, $payload);
    }
}
