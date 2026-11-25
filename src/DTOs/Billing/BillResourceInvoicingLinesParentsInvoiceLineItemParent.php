<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingBillResourceInvoicingLinesParentsInvoiceLineItemParent
 */
final class BillResourceInvoicingLinesParentsInvoiceLineItemParent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Details about the invoice item that generated this line item
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoicingLinesParentsInvoiceLineItemInvoiceItemParent $invoice_item_details;
    /**
     * Details about the subscription item that generated this line item
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoicingLinesParentsInvoiceLineItemSubscriptionItemParent $subscription_item_details;
    /**
     * The type of parent that generated this line item
     */
    public \StripeSDK\Enums\Billing\BillResourceInvoicingLinesParentsInvoiceLineItemParent\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'invoice_item_details' => $value === null || $value instanceof \stdClass ? $this->invoice_item_details = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoicingLinesParentsInvoiceLineItemInvoiceItemParent($value) : parent::assignMember($name, $value),
            'subscription_item_details' => $value === null || $value instanceof \stdClass ? $this->subscription_item_details = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoicingLinesParentsInvoiceLineItemSubscriptionItemParent($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Billing\BillResourceInvoicingLinesParentsInvoiceLineItemParent\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
