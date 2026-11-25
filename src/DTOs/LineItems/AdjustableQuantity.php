<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\LineItems;

/**
 * LineItemsAdjustableQuantity
 */
final class AdjustableQuantity extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public bool $enabled;
    public ?int $maximum;
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
