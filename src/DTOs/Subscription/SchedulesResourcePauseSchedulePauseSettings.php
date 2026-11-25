<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourcePauseSchedulePauseSettings
 */
final class SchedulesResourcePauseSchedulePauseSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bill_for',
        'invoicing_behavior',
        'type',
    ];

    public \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleBillFor $bill_for;
    /**
     * Determines how to handle debits and credits when pausing.
     */
    public \StripeSDK\Enums\Subscription\SchedulesResourcePauseSchedulePauseSettings\InvoicingBehaviorEnum $invoicing_behavior;
    /**
     * The type of pause settings.
     */
    public \StripeSDK\Enums\Subscription\SchedulesResourcePauseSchedulePauseSettings\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bill_for' => $value instanceof \stdClass ? $this->bill_for = new \StripeSDK\DTOs\Subscription\SchedulesResourcePauseScheduleBillFor($value) : parent::assignMember($name, $value),
            'invoicing_behavior' => is_string($value) ? $this->invoicing_behavior = \StripeSDK\Enums\Subscription\SchedulesResourcePauseSchedulePauseSettings\InvoicingBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Subscription\SchedulesResourcePauseSchedulePauseSettings\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
