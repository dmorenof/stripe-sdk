<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsAutomaticPaymentMethodsPaymentIntent
 */
final class FlowsAutomaticPaymentMethodsPaymentIntent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    /**
     * Controls whether this PaymentIntent will accept redirect-based payment methods.
     *
     * Redirect-based payment methods may require your customer to be redirected to a payment method's app or site for authentication or additional steps. To [confirm](https://docs.stripe.com/api/payment_intents/confirm) this PaymentIntent, you may be required to provide a `return_url` to redirect customers back to your site after they authenticate or complete the payment.
     */
    public \StripeSDK\Enums\Payment\FlowsAutomaticPaymentMethodsPaymentIntent\AllowRedirectsEnum $allow_redirects;
    /**
     * Automatically calculates compatible payment methods
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_redirects' => is_string($value) ? $this->allow_redirects = \StripeSDK\Enums\Payment\FlowsAutomaticPaymentMethodsPaymentIntent\AllowRedirectsEnum::from($value) : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
