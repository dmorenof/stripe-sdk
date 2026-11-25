<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * InvoicesPaymentSettings
 */
final class InvoicesPaymentSettings extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'default_mandate' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * ID of the mandate to be used for this invoice. It must correspond to the payment method used to pay the invoice, including the invoice's default_payment_method or default_source, if set.
     */
    public ?string $default_mandate {
        set {
            $this->assigning('default_mandate', $value);
            $this->default_mandate = $value;
        }
    }
    /**
     * Payment-method-specific configuration to provide to the invoice’s PaymentIntent.
     */
    public ?\StripeSDK\DTOs\InvoicesPaymentMethodOptions $payment_method_options;
    /**
     * The list of payment method types (e.g. card) to provide to the invoice’s PaymentIntent. If not set, Stripe attempts to automatically determine the types to use by looking at the invoice’s default payment method, the subscription’s default payment method, the customer’s default payment method, and your [invoice template settings](https://dashboard.stripe.com/settings/billing/invoice).
     */
    public ?\StripeSDK\Collections\InvoicesPaymentSettings\MethodTypesCollection $payment_method_types;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default_mandate' => $value === null || is_string($value) ? $this->default_mandate = $value : parent::assignMember($name, $value),
            'payment_method_options' => $value === null || $value instanceof \stdClass ? $this->payment_method_options = $value === null ? null : new \StripeSDK\DTOs\InvoicesPaymentMethodOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
