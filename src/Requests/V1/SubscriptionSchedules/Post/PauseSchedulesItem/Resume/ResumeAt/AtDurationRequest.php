<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\ResumeAt;

/**
 * resume_at_duration_params
 */
final class AtDurationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'interval',
    ];

    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\ResumeAt\Duration\DurationIntervalEnum $interval;
    public int $interval_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\ResumeAt\Duration\DurationIntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
