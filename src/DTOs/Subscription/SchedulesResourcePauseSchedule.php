<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourcePauseSchedule
 */
final class SchedulesResourcePauseSchedule extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'key',
        'pause',
    ];

    protected const array VALIDATION = [
        'key' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A unique identifier for this pause schedule.
     */
    public string $key {
        set {
            $this->assigning('key', $value);
            $this->key = $value;
        }
    }
    public \StripeSDK\DTOs\Subscription\SchedulesResourcePauseSchedulePause $pause;
    /**
     * Details about when and how the subscription resumes.
     */
    public ?\StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleResume $resume;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'pause' => $value instanceof \stdClass ? $this->pause = new \StripeSDK\DTOs\Subscription\SchedulesResourcePauseSchedulePause($value) : parent::assignMember($name, $value),
            'resume' => $value === null || $value instanceof \stdClass ? $this->resume = $value === null ? null : new \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleResume($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
