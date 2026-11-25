<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalSubscriptionUpdateProductAdjustableQuantity
 */
final class SubscriptionUpdateProductAdjustableQuantity extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
        'minimum',
    ];

    /**
     * If true, the quantity can be adjusted to any non-negative integer.
     */
    public bool $enabled;
    /**
     * The maximum quantity that can be set for the product.
     */
    public ?int $maximum;
    /**
     * The minimum quantity that can be set for the product.
     */
    public int $minimum;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'maximum' => $value === null || is_int($value) ? $this->maximum = $value : parent::assignMember($name, $value),
            'minimum' => is_int($value) ? $this->minimum = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
