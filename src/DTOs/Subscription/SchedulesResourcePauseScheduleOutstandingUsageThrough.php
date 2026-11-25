<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourcePauseScheduleOutstandingUsageThrough
 */
final class SchedulesResourcePauseScheduleOutstandingUsageThrough extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * The type of outstanding usage billing behavior.
     */
    public \StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleOutstandingUsageThrough\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleOutstandingUsageThrough\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
