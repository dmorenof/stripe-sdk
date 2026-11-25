<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourcePauseSchedulePauseStatus
 */
final class SchedulesResourcePauseSchedulePauseStatus extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleStatusError $error;
    /**
     * The lifecycle state of the pause operation.
     */
    public \StripeSDK\Enums\Subscription\SchedulesResourcePauseSchedulePauseStatus\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value instanceof \stdClass ? $this->error = new \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleStatusError($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Subscription\SchedulesResourcePauseSchedulePauseStatus\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
