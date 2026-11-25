<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingBillResourceInvoicingParentsInvoiceSubscriptionParent
 */
final class BillResourceInvoicingParentsInvoiceSubscriptionParent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'subscription',
    ];

    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) defined as subscription metadata when an invoice is created. Becomes an immutable snapshot of the subscription metadata at the time of invoice finalization.
     *  *Note: This attribute is populated only for invoices created on or after June 29, 2023.*
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoicingParentsInvoiceSubscriptionParent\MetadataMap $metadata;
    /**
     * The subscription that generated this invoice
     */
    public \StripeSDK\DTOs\Billing\BillResourceInvoicingParentsInvoiceSubscriptionParent\SubscriptionDTO $subscription;
    /**
     * Only set for upcoming invoices that preview prorations. The time used to calculate prorations.
     * Format: unix-time
     */
    public int $subscription_proration_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'subscription_proration_date' => is_int($value) ? $this->subscription_proration_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
