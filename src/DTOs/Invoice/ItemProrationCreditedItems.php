<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * InvoiceItemProrationCreditedItems
 */
final class ItemProrationCreditedItems extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'invoice_item' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * When `type` is `invoice_item`, the invoice item id for the debited invoice item corresponding to this credit proration.
     */
    public string $invoice_item {
        set {
            $this->assigning('invoice_item', $value);
            $this->invoice_item = $value;
        }
    }
    public \StripeSDK\DTOs\CreditedItemsInvoiceLineItems $invoice_line_item_details;
    /**
     * Whether the credit references a pending invoice item or one or more invoice line items on an invoice.
     */
    public \StripeSDK\Enums\Invoice\ItemProrationCreditedItems\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'invoice_item' => is_string($value) ? $this->invoice_item = $value : parent::assignMember($name, $value),
            'invoice_line_item_details' => $value instanceof \stdClass ? $this->invoice_line_item_details = new \StripeSDK\DTOs\CreditedItemsInvoiceLineItems($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Invoice\ItemProrationCreditedItems\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
