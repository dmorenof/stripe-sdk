<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\SetReaderDisplay\Post;

/**
 * cart
 *
 * Cart details to display on the reader screen, including line items, amounts, and currency.
 */
final class SetReaderDisplayCartRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
        'line_items',
        'total',
    ];

    /**
     * Format: currency
     */
    public string $currency;
    public \StripeSDK\Collections\V1\Terminal\Readers\ByReader\SetReaderDisplay\Post\Cart\LineItemsCollection $line_items;
    public int $tax;
    public int $total;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'tax' => is_int($value) ? $this->tax = $value : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
