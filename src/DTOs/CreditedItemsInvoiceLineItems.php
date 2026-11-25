<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * CreditedItemsInvoiceLineItems
 */
final class CreditedItemsInvoiceLineItems extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'invoice',
        'invoice_line_items',
    ];

    protected const array VALIDATION = [
        'invoice' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The invoice id for the debited line item(s).
     */
    public string $invoice {
        set {
            $this->assigning('invoice', $value);
            $this->invoice = $value;
        }
    }
    /**
     * IDs of the debited invoice line item(s) on the invoice that correspond to the credit proration.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $invoice_line_items;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'invoice' => is_string($value) ? $this->invoice = $value : parent::assignMember($name, $value),
            'invoice_line_items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->invoice_line_items = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
