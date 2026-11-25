<?php

declare(strict_types=1);

namespace StripeSDK\Requests\PauseSchedulesRequestVariant1ItemResumeRequestVariant1;

/**
 * resume_at_params
 */
final class ResumeAtRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\ResumeAt\AtDurationRequest $duration;
    /**
     * Format: unix-time
     */
    public int $timestamp;
    public \StripeSDK\Enums\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\ResumeAt\AtTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\ResumeAt\AtTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
