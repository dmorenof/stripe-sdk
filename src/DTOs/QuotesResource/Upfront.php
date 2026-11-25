<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\QuotesResource;

/**
 * QuotesResourceUpfront
 */
final class Upfront extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_subtotal',
        'amount_total',
        'total_details',
    ];

    /**
     * Total before any discounts or taxes are applied.
     */
    public int $amount_subtotal;
    /**
     * Total after discounts and taxes are applied.
     */
    public int $amount_total;
    /**
     * The line items that will appear on the next invoice after this quote is accepted. This does not include pending invoice items that exist on the customer but may still be included in the next invoice.
     */
    public \StripeSDK\DTOs\QuotesResource\Upfront\LineItemsDTO $line_items;
    public \StripeSDK\DTOs\QuotesResource\TotalDetails $total_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_subtotal' => is_int($value) ? $this->amount_subtotal = $value : parent::assignMember($name, $value),
            'amount_total' => is_int($value) ? $this->amount_total = $value : parent::assignMember($name, $value),
            'total_details' => $value instanceof \stdClass ? $this->total_details = new \StripeSDK\DTOs\QuotesResource\TotalDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
