<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * Billing Schedule Configs Bill Until Duration
 *
 * Configures the `bill_until` date based on the provided `interval` and `interval_count`.
 */
final class BillingSchedulesBillUntilDuration extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'interval',
    ];

    /**
     * Specifies billing duration. Either `day`, `week`, `month` or `year`.
     */
    public \StripeSDK\Enums\SubscriptionsResource\BillingSchedulesBillUntilDuration\IntervalEnum $interval;
    /**
     * The multiplier applied to the interval.
     */
    public ?int $interval_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\SubscriptionsResource\BillingSchedulesBillUntilDuration\IntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => $value === null || is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
