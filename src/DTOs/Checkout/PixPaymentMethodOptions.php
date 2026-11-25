<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * CheckoutPixPaymentMethodOptions
 */
final class PixPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Determines if the amount includes the IOF tax.
     */
    public \StripeSDK\Enums\Checkout\PixPaymentMethodOptions\IncludesIofEnum $amount_includes_iof;
    /**
     * The number of seconds after which Pix payment will expire.
     */
    public ?int $expires_after_seconds;
    public \StripeSDK\DTOs\Payment\MethodOptionsMandateOptionsPix $mandate_options;
    /**
     * Indicates that you intend to make future payments with this PaymentIntent's payment method.
     *
     * If you provide a Customer with the PaymentIntent, you can use this parameter to [attach the payment method](/payments/save-during-payment) to the Customer after the PaymentIntent is confirmed and the customer completes any required actions. If you don't provide a Customer, you can still [attach](/api/payment_methods/attach) the payment method to a Customer after the transaction completes.
     *
     * If the payment method is `card_present` and isn't a digital wallet, Stripe creates and attaches a [generated_card](/api/charges/object#charge_object-payment_method_details-card_present-generated_card) payment method representing the card to the Customer instead.
     *
     * When processing card payments, Stripe uses `setup_future_usage` to help you comply with regional legislation and network rules, such as [SCA](/strong-customer-authentication).
     */
    public \StripeSDK\Enums\Checkout\PixPaymentMethodOptions\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_includes_iof' => is_string($value) ? $this->amount_includes_iof = \StripeSDK\Enums\Checkout\PixPaymentMethodOptions\IncludesIofEnum::from($value) : parent::assignMember($name, $value),
            'expires_after_seconds' => $value === null || is_int($value) ? $this->expires_after_seconds = $value : parent::assignMember($name, $value),
            'mandate_options' => $value instanceof \stdClass ? $this->mandate_options = new \StripeSDK\DTOs\Payment\MethodOptionsMandateOptionsPix($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\Checkout\PixPaymentMethodOptions\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
