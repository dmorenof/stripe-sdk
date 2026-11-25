<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_options_afterpay_clearpay
 */
final class MethodOptionsAfterpayClearpay extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Controls when the funds will be captured from the customer's account.
     */
    public \StripeSDK\Enums\Payment\MethodOptionsAfterpayClearpay\CaptureMethodEnum $capture_method;
    /**
     * An internal identifier or reference that this payment corresponds to. You must limit the identifier to 128 characters, and it can only contain letters, numbers, underscores, backslashes, and dashes.
     * This field differs from the statement descriptor and item name.
     */
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
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
    public \StripeSDK\Enums\Payment\MethodOptionsAfterpayClearpay\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\Payment\MethodOptionsAfterpayClearpay\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\Payment\MethodOptionsAfterpayClearpay\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
