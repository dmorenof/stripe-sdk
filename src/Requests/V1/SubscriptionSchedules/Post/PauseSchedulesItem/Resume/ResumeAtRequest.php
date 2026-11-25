<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume;

/**
 * resume_at_params
 */
final class ResumeAtRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\ResumeAt\AtDurationRequest $duration;
    /**
     * Format: unix-time
     */
    public int $timestamp;
    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\ResumeAt\AtTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\ResumeAt\AtTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
