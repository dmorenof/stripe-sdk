<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingBillResourceInvoicingLinesParentsInvoiceLineItemSubscriptionItemParent
 */
final class BillResourceInvoicingLinesParentsInvoiceLineItemSubscriptionItemParent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'proration',
        'subscription_item',
    ];

    protected const array VALIDATION = [
        'invoice_item' => [
            'maxLength' => 5000,
        ],
        'subscription' => [
            'maxLength' => 5000,
        ],
        'subscription_item' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The invoice item that generated this line item
     */
    public ?string $invoice_item {
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
     * The subscription that the subscription item belongs to
     */
    public ?string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }
    /**
     * The subscription item that generated this line item
     */
    public string $subscription_item {
        set {
            $this->assigning('subscription_item', $value);
            $this->subscription_item = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'invoice_item' => $value === null || is_string($value) ? $this->invoice_item = $value : parent::assignMember($name, $value),
            'proration' => is_bool($value) ? $this->proration = $value : parent::assignMember($name, $value),
            'proration_details' => $value === null || $value instanceof \stdClass ? $this->proration_details = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoicingLinesCommonProrationDetails($value) : parent::assignMember($name, $value),
            'subscription' => $value === null || is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            'subscription_item' => is_string($value) ? $this->subscription_item = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
