<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingMeterResourceAggregationSettings
 */
final class MeterResourceAggregationSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'formula',
    ];

    /**
     * Specifies how events are aggregated.
     */
    public \StripeSDK\Enums\Billing\MeterResourceAggregationSettings\FormulaEnum $formula;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'formula' => is_string($value) ? $this->formula = \StripeSDK\Enums\Billing\MeterResourceAggregationSettings\FormulaEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
