<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * Feature
 *
 * This hash contains the features the mobile payment element supports.
 */
final class SessionResourceComponentsResourceMobilePaymentElementResourceFeatures extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A list of [`allow_redisplay`](https://docs.stripe.com/api/payment_methods/object#payment_method_object-allow_redisplay) values that controls which saved payment methods the mobile payment element displays by filtering to only show payment methods with an `allow_redisplay` value that is present in this list.
     *
     * If not specified, defaults to ["always"]. In order to display all saved payment methods, specify ["always", "limited", "unspecified"].
     */
    public ?\StripeSDK\Collections\Customer\SessionResourceComponentsResourceMobilePaymentElementResourceFeatures\RedisplayFiltersCollection $payment_method_allow_redisplay_filters;
    /**
     * Controls whether or not the mobile payment element shows saved payment methods.
     */
    public ?\StripeSDK\Enums\Customer\SessionResourceComponentsResourceMobilePaymentElementResourceFeatures\MethodRedisplayEnum $payment_method_redisplay;
    /**
     * Controls whether the mobile payment element displays the option to remove a saved payment method."
     *
     * Allowing buyers to remove their saved payment methods impacts subscriptions that depend on that payment method. Removing the payment method detaches the [`customer` object](https://docs.stripe.com/api/payment_methods/object#payment_method_object-customer) from that [PaymentMethod](https://docs.stripe.com/api/payment_methods).
     */
    public ?\StripeSDK\Enums\Customer\SessionResourceComponentsResourceMobilePaymentElementResourceFeatures\MethodRemoveEnum $payment_method_remove;
    /**
     * Controls whether the mobile payment element displays a checkbox offering to save a new payment method.
     *
     * If a customer checks the box, the [`allow_redisplay`](https://docs.stripe.com/api/payment_methods/object#payment_method_object-allow_redisplay) value on the PaymentMethod is set to `'always'` at confirmation time. For PaymentIntents, the [`setup_future_usage`](https://docs.stripe.com/api/payment_intents/object#payment_intent_object-setup_future_usage) value is also set to the value defined in `payment_method_save_usage`.
     */
    public ?\StripeSDK\Enums\Customer\SessionResourceComponentsResourceMobilePaymentElementResourceFeatures\MethodSaveEnum $payment_method_save;
    /**
     * Allows overriding the value of allow_override when saving a new payment method when payment_method_save is set to disabled. Use values: "always", "limited", or "unspecified".
     *
     * If not specified, defaults to `nil` (no override value).
     */
    public ?\StripeSDK\Enums\Customer\SessionResourceComponentsResourceMobilePaymentElementResourceFeatures\RedisplayOverrideEnum $payment_method_save_allow_redisplay_override;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_method_redisplay' => $value === null || is_string($value) ? $this->payment_method_redisplay = $value === null ? null : \StripeSDK\Enums\Customer\SessionResourceComponentsResourceMobilePaymentElementResourceFeatures\MethodRedisplayEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_remove' => $value === null || is_string($value) ? $this->payment_method_remove = $value === null ? null : \StripeSDK\Enums\Customer\SessionResourceComponentsResourceMobilePaymentElementResourceFeatures\MethodRemoveEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_save' => $value === null || is_string($value) ? $this->payment_method_save = $value === null ? null : \StripeSDK\Enums\Customer\SessionResourceComponentsResourceMobilePaymentElementResourceFeatures\MethodSaveEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_save_allow_redisplay_override' => $value === null || is_string($value) ? $this->payment_method_save_allow_redisplay_override = $value === null ? null : \StripeSDK\Enums\Customer\SessionResourceComponentsResourceMobilePaymentElementResourceFeatures\RedisplayOverrideEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
