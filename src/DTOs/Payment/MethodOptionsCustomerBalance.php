<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_options_customer_balance
 */
final class MethodOptionsCustomerBalance extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\MethodOptionsCustomerBalanceBankTransfer $bank_transfer;
    /**
     * The funding method type to be used when there are not enough funds in the customer balance. Permitted values include: `bank_transfer`.
     */
    public ?\StripeSDK\Enums\Payment\MethodOptionsCustomerBalance\FundingTypeEnum $funding_type;
    /**
     * Indicates that you intend to make future payments with this PaymentIntent's payment method.
     *
     * If you provide a Customer with the PaymentIntent, you can use this parameter to [attach the payment method](/payments/save-during-payment) to the Customer after the PaymentIntent is confirmed and the customer completes any required actions. If you don't provide a Customer, you can still [attach](/api/payment_methods/attach) the payment method to a Customer after the transaction completes.
     *
     * If the payment method is `card_present` and isn't a digital wallet, Stripe creates and attaches a [generated_card](/api/charges/object#charge_object-payment_method_details-card_present-generated_card) payment method representing the card to the Customer instead.
     *
     * When processing card payments, Stripe uses `setup_future_usage` to help you comply with regional legislation and network rules, such as [SCA](/strong-customer-authentication).
     */
    public \StripeSDK\Enums\Payment\MethodOptionsCustomerBalance\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_transfer' => $value instanceof \stdClass ? $this->bank_transfer = new \StripeSDK\DTOs\Payment\MethodOptionsCustomerBalanceBankTransfer($value) : parent::assignMember($name, $value),
            'funding_type' => $value === null || is_string($value) ? $this->funding_type = $value === null ? null : \StripeSDK\Enums\Payment\MethodOptionsCustomerBalance\FundingTypeEnum::from($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\Payment\MethodOptionsCustomerBalance\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
