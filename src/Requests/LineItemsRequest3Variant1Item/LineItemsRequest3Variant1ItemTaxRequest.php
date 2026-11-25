<?php

declare(strict_types=1);

namespace StripeSDK\Requests\LineItemsRequest3Variant1Item;

/**
 * amount_details_line_item_tax_param
 */
final class LineItemsRequest3Variant1ItemTaxRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'total_tax_amount',
    ];

    public int $total_tax_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'total_tax_amount' => is_int($value) ? $this->total_tax_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
