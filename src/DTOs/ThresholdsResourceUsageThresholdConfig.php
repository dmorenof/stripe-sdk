<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Usage threshold alert configuration
 *
 * The usage threshold alert configuration enables setting up alerts for when a certain usage threshold on a specific meter is crossed.
 */
final class ThresholdsResourceUsageThresholdConfig extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'gte',
        'meter',
        'recurrence',
    ];

    /**
     * The filters allow limiting the scope of this usage alert. You can only specify up to one filter at this time.
     */
    public ?\StripeSDK\Collections\ThresholdsResourceUsageThresholdConfig\FiltersCollection $filters;
    /**
     * The value at which this alert will trigger.
     */
    public int $gte;
    /**
     * The [Billing Meter](/api/billing/meter) ID whose usage is monitored.
     */
    public \StripeSDK\DTOs\ThresholdsResourceUsageThresholdConfig\MeterDTO $meter;
    /**
     * Defines how the alert will behave.
     */
    public \StripeSDK\Enums\ThresholdsResourceUsageThresholdConfig\RecurrenceEnum $recurrence;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'filters' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->filters = $value === null ? null : new \StripeSDK\Collections\ThresholdsResourceUsageThresholdConfig\FiltersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\ThresholdsResourceUsageAlertFilter::class)) : parent::assignMember($name, $value),
            'gte' => is_int($value) ? $this->gte = $value : parent::assignMember($name, $value),
            'recurrence' => is_string($value) ? $this->recurrence = \StripeSDK\Enums\ThresholdsResourceUsageThresholdConfig\RecurrenceEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
