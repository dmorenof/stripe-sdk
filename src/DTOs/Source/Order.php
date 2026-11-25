<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * SourceOrder
 */
final class Order extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
    ];

    protected const array VALIDATION = [
        'email' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A positive integer in the smallest currency unit (that is, 100 cents for $1.00, or 1 for ¥1, Japanese Yen being a zero-decimal currency) representing the total amount for the order.
     */
    public int $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * The email address of the customer placing the order.
     */
    public string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * List of items constituting the order.
     */
    public ?\StripeSDK\Collections\Source\Order\ItemsCollection $items;
    public \StripeSDK\DTOs\Shipping $shipping;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'items' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->items = $value === null ? null : new \StripeSDK\Collections\Source\Order\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Source\OrderItem::class)) : parent::assignMember($name, $value),
            'shipping' => $value instanceof \stdClass ? $this->shipping = new \StripeSDK\DTOs\Shipping($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
