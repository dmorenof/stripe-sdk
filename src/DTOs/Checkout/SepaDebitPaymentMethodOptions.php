<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * CheckoutSepaDebitPaymentMethodOptions
 */
final class SepaDebitPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'target_date' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Checkout\PaymentMethodOptionsMandateOptionsSepaDebit $mandate_options;
    /**
     * Indicates that you intend to make future payments with this PaymentIntent's payment method.
     *
     * If you provide a Customer with the PaymentIntent, you can use this parameter to [attach the payment method](/payments/save-during-payment) to the Customer after the PaymentIntent is confirmed and the customer completes any required actions. If you don't provide a Customer, you can still [attach](/api/payment_methods/attach) the payment method to a Customer after the transaction completes.
     *
     * If the payment method is `card_present` and isn't a digital wallet, Stripe creates and attaches a [generated_card](/api/charges/object#charge_object-payment_method_details-card_present-generated_card) payment method representing the card to the Customer instead.
     *
     * When processing card payments, Stripe uses `setup_future_usage` to help you comply with regional legislation and network rules, such as [SCA](/strong-customer-authentication).
     */
    public \StripeSDK\Enums\Checkout\SepaDebitPaymentMethodOptions\FutureUsageEnum $setup_future_usage;
    /**
     * Controls when Stripe will attempt to debit the funds from the customer's account. The date must be a string in YYYY-MM-DD format. The date must be in the future and between 3 and 15 calendar days from now.
     */
    public string $target_date {
        set {
            $this->assigning('target_date', $value);
            $this->target_date = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_options' => $value instanceof \stdClass ? $this->mandate_options = new \StripeSDK\DTOs\Checkout\PaymentMethodOptionsMandateOptionsSepaDebit($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\Checkout\SepaDebitPaymentMethodOptions\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'target_date' => is_string($value) ? $this->target_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
