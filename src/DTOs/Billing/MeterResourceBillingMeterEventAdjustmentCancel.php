<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingMeterResourceBillingMeterEventAdjustmentCancel
 */
final class MeterResourceBillingMeterEventAdjustmentCancel extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'identifier' => [
            'maxLength' => 100,
        ],
    ];

    /**
     * Unique identifier for the event.
     */
    public ?string $identifier {
        set {
            $this->assigning('identifier', $value);
            $this->identifier = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifier' => $value === null || is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
