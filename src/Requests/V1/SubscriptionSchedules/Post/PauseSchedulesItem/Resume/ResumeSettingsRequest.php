<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume;

/**
 * resume_settings_params
 */
final class ResumeSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\Settings\CycleAnchorEnum $billing_cycle_anchor;
    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\Settings\PaymentBehaviorEnum $payment_behavior;
    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\Settings\ProrationBehaviorEnum $proration_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_cycle_anchor' => is_string($value) ? $this->billing_cycle_anchor = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\Settings\CycleAnchorEnum::from($value) : parent::assignMember($name, $value),
            'payment_behavior' => is_string($value) ? $this->payment_behavior = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\Settings\PaymentBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\Settings\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
