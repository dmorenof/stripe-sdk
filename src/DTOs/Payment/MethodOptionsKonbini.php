<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_options_konbini
 */
final class MethodOptionsKonbini extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'confirmation_number' => [
            'maxLength' => 5000,
        ],
        'product_description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * An optional 10 to 11 digit numeric-only string determining the confirmation code at applicable convenience stores.
     */
    public ?string $confirmation_number {
        set {
            $this->assigning('confirmation_number', $value);
            $this->confirmation_number = $value;
        }
    }
    /**
     * The number of calendar days (between 1 and 60) after which Konbini payment instructions will expire. For example, if a PaymentIntent is confirmed with Konbini and `expires_after_days` set to 2 on Monday JST, the instructions will expire on Wednesday 23:59:59 JST.
     */
    public ?int $expires_after_days;
    /**
     * The timestamp at which the Konbini payment instructions will expire. Only one of `expires_after_days` or `expires_at` may be set.
     * Format: unix-time
     */
    public ?int $expires_at;
    /**
     * A product descriptor of up to 22 characters, which will appear to customers at the convenience store.
     */
    public ?string $product_description {
        set {
            $this->assigning('product_description', $value);
            $this->product_description = $value;
        }
    }
    /**
     * Indicates that you intend to make future payments with this PaymentIntent's payment method.
     *
     * If you provide a Customer with the PaymentIntent, you can use this parameter to [attach the payment method](/payments/save-during-payment) to the Customer after the PaymentIntent is confirmed and the customer completes any required actions. If you don't provide a Customer, you can still [attach](/api/payment_methods/attach) the payment method to a Customer after the transaction completes.
     *
     * If the payment method is `card_present` and isn't a digital wallet, Stripe creates and attaches a [generated_card](/api/charges/object#charge_object-payment_method_details-card_present-generated_card) payment method representing the card to the Customer instead.
     *
     * When processing card payments, Stripe uses `setup_future_usage` to help you comply with regional legislation and network rules, such as [SCA](/strong-customer-authentication).
     */
    public \StripeSDK\Enums\Payment\MethodOptionsKonbini\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'confirmation_number' => $value === null || is_string($value) ? $this->confirmation_number = $value : parent::assignMember($name, $value),
            'expires_after_days' => $value === null || is_int($value) ? $this->expires_after_days = $value : parent::assignMember($name, $value),
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'product_description' => $value === null || is_string($value) ? $this->product_description = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\Payment\MethodOptionsKonbini\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
