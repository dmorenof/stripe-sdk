<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourcePauseScheduleResume
 */
final class SchedulesResourcePauseScheduleResume extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'resume_at',
        'settings',
        'status',
    ];

    /**
     * Time at which the subscription resumes.
     * Format: unix-time
     */
    public int $resume_at;
    public \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleResumeSettings $settings;
    public \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleResumeStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'resume_at' => is_int($value) ? $this->resume_at = $value : parent::assignMember($name, $value),
            'settings' => $value instanceof \stdClass ? $this->settings = new \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleResumeSettings($value) : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleResumeStatus($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
