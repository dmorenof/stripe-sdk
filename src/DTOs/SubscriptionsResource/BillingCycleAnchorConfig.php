<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * SubscriptionsResourceBillingCycleAnchorConfig
 */
final class BillingCycleAnchorConfig extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'day_of_month',
    ];

    /**
     * The day of the month of the billing_cycle_anchor.
     */
    public int $day_of_month;
    /**
     * The hour of the day of the billing_cycle_anchor.
     */
    public ?int $hour;
    /**
     * The minute of the hour of the billing_cycle_anchor.
     */
    public ?int $minute;
    /**
     * The month to start full cycle billing periods.
     */
    public ?int $month;
    /**
     * The second of the minute of the billing_cycle_anchor.
     */
    public ?int $second;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'day_of_month' => is_int($value) ? $this->day_of_month = $value : parent::assignMember($name, $value),
            'hour' => $value === null || is_int($value) ? $this->hour = $value : parent::assignMember($name, $value),
            'minute' => $value === null || is_int($value) ? $this->minute = $value : parent::assignMember($name, $value),
            'month' => $value === null || is_int($value) ? $this->month = $value : parent::assignMember($name, $value),
            'second' => $value === null || is_int($value) ? $this->second = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
