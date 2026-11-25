<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\Post\TrialSettings;

/**
 * end_behavior
 */
final class EndBehaviorRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Subscriptions\Post\TrialSettings\EndBehavior\CycleAnchorEnum $billing_cycle_anchor;
    public \StripeSDK\Enums\V1\Subscriptions\Post\TrialSettings\EndBehavior\PaymentMethodEnum $missing_payment_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_cycle_anchor' => is_string($value) ? $this->billing_cycle_anchor = \StripeSDK\Enums\V1\Subscriptions\Post\TrialSettings\EndBehavior\CycleAnchorEnum::from($value) : parent::assignMember($name, $value),
            'missing_payment_method' => is_string($value) ? $this->missing_payment_method = \StripeSDK\Enums\V1\Subscriptions\Post\TrialSettings\EndBehavior\PaymentMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
