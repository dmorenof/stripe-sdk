<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourcePauseScheduleResumeSettings
 */
final class SchedulesResourcePauseScheduleResumeSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'billing_cycle_anchor',
        'payment_behavior',
        'proration_behavior',
    ];

    /**
     * The billing cycle anchor that applies when the subscription is resumed.
     */
    public \StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleResumeSettings\CycleAnchorEnum $billing_cycle_anchor;
    /**
     * Controls whether Stripe attempts payment on the resumption invoice and how that affects the subscription's status.
     */
    public \StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleResumeSettings\PaymentBehaviorEnum $payment_behavior;
    /**
     * Determines how to handle prorations resulting from the billing_cycle_anchor change on resume.
     */
    public \StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleResumeSettings\ProrationBehaviorEnum $proration_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_cycle_anchor' => is_string($value) ? $this->billing_cycle_anchor = \StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleResumeSettings\CycleAnchorEnum::from($value) : parent::assignMember($name, $value),
            'payment_behavior' => is_string($value) ? $this->payment_behavior = \StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleResumeSettings\PaymentBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleResumeSettings\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
