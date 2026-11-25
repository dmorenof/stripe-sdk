<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * CartItem
 *
 * Represents a cart to be displayed on the reader
 */
final class Cart extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
        'line_items',
        'total',
    ];

    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * List of line items in the cart.
     */
    public \StripeSDK\Collections\TerminalReaderReaderResource\Cart\LineItemsCollection $line_items;
    /**
     * Tax amount for the entire cart. A positive integer in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public ?int $tax;
    /**
     * Total amount for the entire cart, including tax. A positive integer in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $total;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'line_items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->line_items = new \StripeSDK\Collections\TerminalReaderReaderResource\Cart\LineItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TerminalReaderReaderResource\LineItem::class)) : parent::assignMember($name, $value),
            'tax' => $value === null || is_int($value) ? $this->tax = $value : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
