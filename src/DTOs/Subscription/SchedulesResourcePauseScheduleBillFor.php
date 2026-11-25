<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourcePauseScheduleBillFor
 */
final class SchedulesResourcePauseScheduleBillFor extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'outstanding_usage_through',
        'unused_time_from',
    ];

    public \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleOutstandingUsageThrough $outstanding_usage_through;
    public \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleUnusedTimeFrom $unused_time_from;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'outstanding_usage_through' => $value instanceof \stdClass ? $this->outstanding_usage_through = new \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleOutstandingUsageThrough($value) : parent::assignMember($name, $value),
            'unused_time_from' => $value instanceof \stdClass ? $this->unused_time_from = new \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleUnusedTimeFrom($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
