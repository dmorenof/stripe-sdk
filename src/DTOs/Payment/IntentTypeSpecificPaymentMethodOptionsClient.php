<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentTypeSpecificPaymentMethodOptionsClient
 */
final class IntentTypeSpecificPaymentMethodOptionsClient extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Controls when the funds will be captured from the customer's account.
     */
    public \StripeSDK\Enums\Payment\IntentTypeSpecificPaymentMethodOptionsClient\CaptureMethodEnum $capture_method;
    public \StripeSDK\DTOs\Payment\FlowsInstallmentOptions $installments;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptionsMandateOptionsPayto $mandate_options;
    /**
     * Request ability to [increment](https://docs.stripe.com/terminal/features/incremental-authorizations) this PaymentIntent if the combination of MCC and card brand is eligible. Check [incremental_authorization_supported](https://docs.stripe.com/api/charges/object#charge_object-payment_method_details-card_present-incremental_authorization_supported) in the [Confirm](https://docs.stripe.com/api/payment_intents/confirm) response to verify support.
     */
    public bool $request_incremental_authorization_support;
    /**
     * When enabled, using a card that is attached to a customer will require the CVC to be provided again (i.e. using the cvc_token parameter).
     */
    public bool $require_cvc_recollection;
    public \StripeSDK\DTOs\Payment\MethodOptionsCardPresentRouting $routing;
    /**
     * Indicates that you intend to make future payments with this PaymentIntent's payment method.
     *
     * If you provide a Customer with the PaymentIntent, you can use this parameter to [attach the payment method](/payments/save-during-payment) to the Customer after the PaymentIntent is confirmed and the customer completes any required actions. If you don't provide a Customer, you can still [attach](/api/payment_methods/attach) the payment method to a Customer after the transaction completes.
     *
     * If the payment method is `card_present` and isn't a digital wallet, Stripe creates and attaches a [generated_card](/api/charges/object#charge_object-payment_method_details-card_present-generated_card) payment method representing the card to the Customer instead.
     *
     * When processing card payments, Stripe uses `setup_future_usage` to help you comply with regional legislation and network rules, such as [SCA](/strong-customer-authentication).
     */
    public \StripeSDK\Enums\Payment\IntentTypeSpecificPaymentMethodOptionsClient\FutureUsageEnum $setup_future_usage;
    /**
     * Bank account verification method. The default value is `automatic`.
     */
    public \StripeSDK\Enums\Payment\IntentTypeSpecificPaymentMethodOptionsClient\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\Payment\IntentTypeSpecificPaymentMethodOptionsClient\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'installments' => $value instanceof \stdClass ? $this->installments = new \StripeSDK\DTOs\Payment\FlowsInstallmentOptions($value) : parent::assignMember($name, $value),
            'mandate_options' => $value instanceof \stdClass ? $this->mandate_options = new \StripeSDK\DTOs\Payment\IntentPaymentMethodOptionsMandateOptionsPayto($value) : parent::assignMember($name, $value),
            'request_incremental_authorization_support' => is_bool($value) ? $this->request_incremental_authorization_support = $value : parent::assignMember($name, $value),
            'require_cvc_recollection' => is_bool($value) ? $this->require_cvc_recollection = $value : parent::assignMember($name, $value),
            'routing' => $value instanceof \stdClass ? $this->routing = new \StripeSDK\DTOs\Payment\MethodOptionsCardPresentRouting($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\Payment\IntentTypeSpecificPaymentMethodOptionsClient\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\Payment\IntentTypeSpecificPaymentMethodOptionsClient\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
