<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingBillResourceInvoicingLinesParentsInvoiceLineItemInvoiceItemParent
 */
final class BillResourceInvoicingLinesParentsInvoiceLineItemInvoiceItemParent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'invoice_item',
        'proration',
    ];

    protected const array VALIDATION = [
        'invoice_item' => [
            'maxLength' => 5000,
        ],
        'subscription' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The invoice item that generated this line item
     */
    public string $invoice_item {
        set {
            $this->assigning('invoice_item', $value);
            $this->invoice_item = $value;
        }
    }
    /**
     * Whether this is a proration
     */
    public bool $proration;
    /**
     * Additional details for proration line items
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoicingLinesCommonProrationDetails $proration_details;
    /**
     * The subscription that the invoice item belongs to
     */
    public ?string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'invoice_item' => is_string($value) ? $this->invoice_item = $value : parent::assignMember($name, $value),
            'proration' => is_bool($value) ? $this->proration = $value : parent::assignMember($name, $value),
            'proration_details' => $value === null || $value instanceof \stdClass ? $this->proration_details = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoicingLinesCommonProrationDetails($value) : parent::assignMember($name, $value),
            'subscription' => $value === null || is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
