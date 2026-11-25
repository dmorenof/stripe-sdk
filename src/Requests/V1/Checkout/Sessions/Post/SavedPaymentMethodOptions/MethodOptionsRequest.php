<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\SavedPaymentMethodOptions;

/**
 * saved_payment_method_options_param
 *
 * Controls saved payment method settings for the session. Only available in `payment` and `subscription` mode.
 */
final class MethodOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\SavedPaymentMethodOptions\RedisplayFiltersCollection $allow_redisplay_filters;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\SavedPaymentMethodOptions\MethodRemoveEnum $payment_method_remove;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\SavedPaymentMethodOptions\MethodSaveEnum $payment_method_save;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_method_remove' => is_string($value) ? $this->payment_method_remove = \StripeSDK\Enums\V1\Checkout\Sessions\Post\SavedPaymentMethodOptions\MethodRemoveEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_save' => is_string($value) ? $this->payment_method_save = \StripeSDK\Enums\V1\Checkout\Sessions\Post\SavedPaymentMethodOptions\MethodSaveEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
