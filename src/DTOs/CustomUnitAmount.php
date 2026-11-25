<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * CustomUnitAmount
 */
final class CustomUnitAmount extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The maximum unit amount the customer can specify for this item.
     */
    public ?int $maximum;
    /**
     * The minimum unit amount the customer can specify for this item. Must be at least the minimum charge amount.
     */
    public ?int $minimum;
    /**
     * The starting unit amount which can be updated by the customer.
     */
    public ?int $preset;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'maximum' => $value === null || is_int($value) ? $this->maximum = $value : parent::assignMember($name, $value),
            'minimum' => $value === null || is_int($value) ? $this->minimum = $value : parent::assignMember($name, $value),
            'preset' => $value === null || is_int($value) ? $this->preset = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
