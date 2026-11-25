<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ShippingRate;

/**
 * ShippingRateDeliveryEstimateBound
 */
final class DeliveryEstimateBound extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'unit',
        'value',
    ];

    /**
     * A unit of time.
     */
    public \StripeSDK\Enums\ShippingRate\DeliveryEstimateBound\UnitEnum $unit;
    /**
     * Must be greater than 0.
     */
    public int $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'unit' => is_string($value) ? $this->unit = \StripeSDK\Enums\ShippingRate\DeliveryEstimateBound\UnitEnum::from($value) : parent::assignMember($name, $value),
            'value' => is_int($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
