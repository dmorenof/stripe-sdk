<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourcePauseScheduleUnusedTimeFrom
 */
final class SchedulesResourcePauseScheduleUnusedTimeFrom extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * The type of unused time credit behavior.
     */
    public \StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleUnusedTimeFrom\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleUnusedTimeFrom\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
