<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionScheduleCurrentPhase
 */
final class ScheduleCurrentPhase extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end_date',
        'start_date',
    ];

    /**
     * The end of this phase of the subscription schedule.
     * Format: unix-time
     */
    public int $end_date;
    /**
     * The start of this phase of the subscription schedule.
     * Format: unix-time
     */
    public int $start_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end_date' => is_int($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'start_date' => is_int($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
