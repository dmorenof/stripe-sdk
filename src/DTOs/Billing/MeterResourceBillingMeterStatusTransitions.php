<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingMeterResourceBillingMeterStatusTransitions
 */
final class MeterResourceBillingMeterStatusTransitions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The time the meter was deactivated, if any. Measured in seconds since Unix epoch.
     * Format: unix-time
     */
    public ?int $deactivated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deactivated_at' => $value === null || is_int($value) ? $this->deactivated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
