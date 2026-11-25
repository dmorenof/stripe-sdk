<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingBillResourceInvoicingParentsInvoiceParent
 */
final class BillResourceInvoicingParentsInvoiceParent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Details about the quote that generated this invoice
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoicingParentsInvoiceQuoteParent $quote_details;
    /**
     * Details about the subscription that generated this invoice
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoicingParentsInvoiceSubscriptionParent $subscription_details;
    /**
     * The type of parent that generated this invoice
     */
    public \StripeSDK\Enums\Billing\BillResourceInvoicingParentsInvoiceParent\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'quote_details' => $value === null || $value instanceof \stdClass ? $this->quote_details = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoicingParentsInvoiceQuoteParent($value) : parent::assignMember($name, $value),
            'subscription_details' => $value === null || $value instanceof \stdClass ? $this->subscription_details = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoicingParentsInvoiceSubscriptionParent($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Billing\BillResourceInvoicingParentsInvoiceParent\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
