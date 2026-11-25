<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * End Behavior
 *
 * Defines how a subscription behaves when a trial ends.
 */
final class TrialSettingsEndBehavior extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'missing_payment_method',
    ];

    /**
     * Indicates how the subscription's billing cycle anchor is reset when a trial ends. If not set, the default is `now`.
     */
    public ?\StripeSDK\Enums\SubscriptionsResource\TrialSettingsEndBehavior\CycleAnchorEnum $billing_cycle_anchor;
    /**
     * Indicates how the subscription should change when the trial ends if the user did not provide a payment method.
     */
    public \StripeSDK\Enums\SubscriptionsResource\TrialSettingsEndBehavior\PaymentMethodEnum $missing_payment_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_cycle_anchor' => $value === null || is_string($value) ? $this->billing_cycle_anchor = $value === null ? null : \StripeSDK\Enums\SubscriptionsResource\TrialSettingsEndBehavior\CycleAnchorEnum::from($value) : parent::assignMember($name, $value),
            'missing_payment_method' => is_string($value) ? $this->missing_payment_method = \StripeSDK\Enums\SubscriptionsResource\TrialSettingsEndBehavior\PaymentMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
