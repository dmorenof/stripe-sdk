<?php

declare(strict_types=1);

namespace StripeSDK\V1\Invoices\ByInvoice;

final class MarkUncollectible extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/invoices/{invoice}/mark_uncollectible [operationId: PostInvoicesInvoiceMarkUncollectible] */
    /**
     * Mark an invoice as uncollectible
     *
     * <p>Marking an invoice as uncollectible is useful for keeping track of bad debts that can be written off for accounting purposes.</p>
     */
    public static function post(string $invoice, ?\StripeSDK\Requests\V1\Invoices\ByInvoice\MarkUncollectible\Post $payload = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Invoices\ByInvoice\MarkUncollectible::class)->post($invoice, $payload);
    }
}
