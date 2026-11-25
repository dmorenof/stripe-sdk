<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionOptionalItemAdjustableQuantity
 */
final class PagesCheckoutSessionOptionalItemAdjustableQuantity extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    /**
     * Set to true if the quantity can be adjusted to any non-negative integer.
     */
    public bool $enabled;
    /**
     * The maximum quantity of this item the customer can purchase. By default this value is 99. You can specify a value up to 999999.
     */
    public ?int $maximum;
    /**
     * The minimum quantity of this item the customer must purchase, if they choose to purchase it. Because this item is optional, the customer will always be able to remove it from their order, even if the `minimum` configured here is greater than 0. By default this value is 0.
     */
    public ?int $minimum;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'maximum' => $value === null || is_int($value) ? $this->maximum = $value : parent::assignMember($name, $value),
            'minimum' => $value === null || is_int($value) ? $this->minimum = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
