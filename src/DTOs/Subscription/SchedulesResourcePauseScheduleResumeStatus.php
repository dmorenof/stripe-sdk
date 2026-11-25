<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourcePauseScheduleResumeStatus
 */
final class SchedulesResourcePauseScheduleResumeStatus extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleStatusError $error;
    /**
     * The lifecycle state of the resume operation.
     */
    public \StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleResumeStatus\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value instanceof \stdClass ? $this->error = new \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleStatusError($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleResumeStatus\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
