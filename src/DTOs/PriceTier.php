<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * PriceTier
 */
final class PriceTier extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Price for the entire tier.
     */
    public ?int $flat_amount;
    /**
     * Same as `flat_amount`, but contains a decimal value with at most 12 decimal places.
     * Format: decimal
     */
    public ?string $flat_amount_decimal;
    /**
     * Per unit price for units relevant to the tier.
     */
    public ?int $unit_amount;
    /**
     * Same as `unit_amount`, but contains a decimal value with at most 12 decimal places.
     * Format: decimal
     */
    public ?string $unit_amount_decimal;
    /**
     * Up to and including to this quantity will be contained in the tier.
     */
    public ?int $up_to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'flat_amount' => $value === null || is_int($value) ? $this->flat_amount = $value : parent::assignMember($name, $value),
            'flat_amount_decimal' => $value === null || is_string($value) ? $this->flat_amount_decimal = $value : parent::assignMember($name, $value),
            'unit_amount' => $value === null || is_int($value) ? $this->unit_amount = $value : parent::assignMember($name, $value),
            'unit_amount_decimal' => $value === null || is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            'up_to' => $value === null || is_int($value) ? $this->up_to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
