<?php

declare(strict_types=1);

namespace StripeSDK\Requests\PauseSchedulesRequestVariant1ItemResumeRequestVariant1;

/**
 * resume_settings_params
 */
final class PauseSchedulesRequestVariant1ItemResumeRequestVariant1SettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\Settings\CycleAnchorEnum $billing_cycle_anchor;
    public \StripeSDK\Enums\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\Settings\PaymentBehaviorEnum $payment_behavior;
    public \StripeSDK\Enums\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\Settings\ProrationBehaviorEnum $proration_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_cycle_anchor' => is_string($value) ? $this->billing_cycle_anchor = \StripeSDK\Enums\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\Settings\CycleAnchorEnum::from($value) : parent::assignMember($name, $value),
            'payment_behavior' => is_string($value) ? $this->payment_behavior = \StripeSDK\Enums\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\Settings\PaymentBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\Settings\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
