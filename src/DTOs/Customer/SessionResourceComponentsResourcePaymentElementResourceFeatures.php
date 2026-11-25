<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * Feature
 *
 * This hash contains the features the Payment Element supports.
 */
final class SessionResourceComponentsResourcePaymentElementResourceFeatures extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_method_allow_redisplay_filters',
        'payment_method_redisplay',
        'payment_method_remove',
        'payment_method_save',
    ];

    /**
     * A list of [`allow_redisplay`](https://docs.stripe.com/api/payment_methods/object#payment_method_object-allow_redisplay) values that controls which saved payment methods the Payment Element displays by filtering to only show payment methods with an `allow_redisplay` value that is present in this list.
     *
     * If not specified, defaults to ["always"]. In order to display all saved payment methods, specify ["always", "limited", "unspecified"].
     */
    public \StripeSDK\Collections\Customer\SessionResourceComponentsResourcePaymentElementResourceFeatures\RedisplayFiltersCollection $payment_method_allow_redisplay_filters;
    /**
     * Controls whether or not the Payment Element shows saved payment methods. This parameter defaults to `disabled`.
     */
    public \StripeSDK\Enums\Customer\SessionResourceComponentsResourcePaymentElementResourceFeatures\MethodRedisplayEnum $payment_method_redisplay;
    /**
     * Determines the max number of saved payment methods for the Payment Element to display. This parameter defaults to `3`. The maximum redisplay limit is `10`.
     */
    public ?int $payment_method_redisplay_limit;
    /**
     * Controls whether the Payment Element displays the option to remove a saved payment method. This parameter defaults to `disabled`.
     *
     * Allowing buyers to remove their saved payment methods impacts subscriptions that depend on that payment method. Removing the payment method detaches the [`customer` object](https://docs.stripe.com/api/payment_methods/object#payment_method_object-customer) from that [PaymentMethod](https://docs.stripe.com/api/payment_methods).
     */
    public \StripeSDK\Enums\Customer\SessionResourceComponentsResourcePaymentElementResourceFeatures\MethodRemoveEnum $payment_method_remove;
    /**
     * Controls whether the Payment Element displays a checkbox offering to save a new payment method. This parameter defaults to `disabled`.
     *
     * If a customer checks the box, the [`allow_redisplay`](https://docs.stripe.com/api/payment_methods/object#payment_method_object-allow_redisplay) value on the PaymentMethod is set to `'always'` at confirmation time. For PaymentIntents, the [`setup_future_usage`](https://docs.stripe.com/api/payment_intents/object#payment_intent_object-setup_future_usage) value is also set to the value defined in `payment_method_save_usage`.
     */
    public \StripeSDK\Enums\Customer\SessionResourceComponentsResourcePaymentElementResourceFeatures\MethodSaveEnum $payment_method_save;
    /**
     * When using PaymentIntents and the customer checks the save checkbox, this field determines the [`setup_future_usage`](https://docs.stripe.com/api/payment_intents/object#payment_intent_object-setup_future_usage) value used to confirm the PaymentIntent.
     *
     * When using SetupIntents, directly configure the [`usage`](https://docs.stripe.com/api/setup_intents/object#setup_intent_object-usage) value on SetupIntent creation.
     */
    public ?\StripeSDK\Enums\Customer\SessionResourceComponentsResourcePaymentElementResourceFeatures\SaveUsageEnum $payment_method_save_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_method_redisplay' => is_string($value) ? $this->payment_method_redisplay = \StripeSDK\Enums\Customer\SessionResourceComponentsResourcePaymentElementResourceFeatures\MethodRedisplayEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_redisplay_limit' => $value === null || is_int($value) ? $this->payment_method_redisplay_limit = $value : parent::assignMember($name, $value),
            'payment_method_remove' => is_string($value) ? $this->payment_method_remove = \StripeSDK\Enums\Customer\SessionResourceComponentsResourcePaymentElementResourceFeatures\MethodRemoveEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_save' => is_string($value) ? $this->payment_method_save = \StripeSDK\Enums\Customer\SessionResourceComponentsResourcePaymentElementResourceFeatures\MethodSaveEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_save_usage' => $value === null || is_string($value) ? $this->payment_method_save_usage = $value === null ? null : \StripeSDK\Enums\Customer\SessionResourceComponentsResourcePaymentElementResourceFeatures\SaveUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
