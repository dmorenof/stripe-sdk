<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionSavedPaymentMethodOptions
 */
final class PagesCheckoutSessionSavedPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Uses the `allow_redisplay` value of each saved payment method to filter the set presented to a returning customer. By default, only saved payment methods with ’allow_redisplay: ‘always’ are shown in Checkout.
     */
    public ?\StripeSDK\Collections\Payment\PagesCheckoutSessionSavedPaymentMethodOptions\RedisplayFiltersCollection $allow_redisplay_filters;
    /**
     * Enable customers to choose if they wish to remove their saved payment methods. Disabled by default.
     */
    public ?\StripeSDK\Enums\Payment\PagesCheckoutSessionSavedPaymentMethodOptions\MethodRemoveEnum $payment_method_remove;
    /**
     * Enable customers to choose if they wish to save their payment method for future use. Disabled by default.
     */
    public ?\StripeSDK\Enums\Payment\PagesCheckoutSessionSavedPaymentMethodOptions\MethodSaveEnum $payment_method_save;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_method_remove' => $value === null || is_string($value) ? $this->payment_method_remove = $value === null ? null : \StripeSDK\Enums\Payment\PagesCheckoutSessionSavedPaymentMethodOptions\MethodRemoveEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_save' => $value === null || is_string($value) ? $this->payment_method_save = $value === null ? null : \StripeSDK\Enums\Payment\PagesCheckoutSessionSavedPaymentMethodOptions\MethodSaveEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
