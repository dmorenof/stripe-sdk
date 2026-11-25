<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * SubscriptionsResourcePaymentSettings
 */
final class PaymentSettings extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Payment-method-specific configuration to provide to invoices created by the subscription.
     */
    public ?\StripeSDK\DTOs\SubscriptionsResource\PaymentMethodOptions $payment_method_options;
    /**
     * The list of payment method types to provide to every invoice created by the subscription. If not set, Stripe attempts to automatically determine the types to use by looking at the invoice’s default payment method, the subscription’s default payment method, the customer’s default payment method, and your [invoice template settings](https://dashboard.stripe.com/settings/billing/invoice).
     */
    public ?\StripeSDK\Collections\SubscriptionsResource\PaymentSettings\MethodTypesCollection $payment_method_types;
    /**
     * Configure whether Stripe updates `subscription.default_payment_method` when payment succeeds. Defaults to `off`.
     */
    public ?\StripeSDK\Enums\SubscriptionsResource\PaymentSettings\PaymentMethodEnum $save_default_payment_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_method_options' => $value === null || $value instanceof \stdClass ? $this->payment_method_options = $value === null ? null : new \StripeSDK\DTOs\SubscriptionsResource\PaymentMethodOptions($value) : parent::assignMember($name, $value),
            'save_default_payment_method' => $value === null || is_string($value) ? $this->save_default_payment_method = $value === null ? null : \StripeSDK\Enums\SubscriptionsResource\PaymentSettings\PaymentMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
