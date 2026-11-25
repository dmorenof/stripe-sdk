<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_intent_payment_method_options_card
 */
final class IntentPaymentMethodOptionsCard extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'statement_descriptor_suffix_kana' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor_suffix_kanji' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Controls when the funds will be captured from the customer's account.
     */
    public \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\CaptureMethodEnum $capture_method;
    /**
     * Installment details for this payment.
     *
     * For more information, see the [installments integration guide](https://docs.stripe.com/payments/installments).
     */
    public ?\StripeSDK\DTOs\Payment\MethodOptionsCardInstallments $installments;
    /**
     * Configuration options for setting up an eMandate for cards issued in India.
     */
    public ?\StripeSDK\DTOs\Payment\MethodOptionsCardMandateOptions $mandate_options;
    /**
     * Selected network to process this payment intent on. Depends on the available networks of the card attached to the payment intent. Can be only set confirm-time.
     */
    public ?\StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\NetworkEnum $network;
    /**
     * Request ability to [capture beyond the standard authorization validity window](https://docs.stripe.com/payments/extended-authorization) for this PaymentIntent.
     */
    public \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\ExtendedAuthorizationEnum $request_extended_authorization;
    /**
     * Request ability to [increment the authorization](https://docs.stripe.com/payments/incremental-authorization) for this PaymentIntent.
     */
    public \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\IncrementalAuthorizationEnum $request_incremental_authorization;
    /**
     * Request ability to make [multiple captures](https://docs.stripe.com/payments/multicapture) for this PaymentIntent.
     */
    public \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\MulticaptureEnum $request_multicapture;
    /**
     * Request ability to [overcapture](https://docs.stripe.com/payments/overcapture) for this PaymentIntent.
     */
    public \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\OvercaptureEnum $request_overcapture;
    /**
     * We strongly recommend that you rely on our SCA Engine to automatically prompt your customers for authentication based on risk level and [other requirements](https://docs.stripe.com/strong-customer-authentication). However, if you wish to request 3D Secure based on logic from your own fraud engine, provide this option. If not provided, this value defaults to `automatic`. Read our guide on [manually requesting 3D Secure](https://docs.stripe.com/payments/3d-secure/authentication-flow#manual-three-ds) for more information on how this configuration interacts with Radar and our SCA Engine.
     */
    public ?\StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\DSecureEnum $request_three_d_secure;
    /**
     * When enabled, using a card that is attached to a customer will require the CVC to be provided again (i.e. using the cvc_token parameter).
     */
    public bool $require_cvc_recollection;
    /**
     * Indicates that you intend to make future payments with this PaymentIntent's payment method.
     *
     * If you provide a Customer with the PaymentIntent, you can use this parameter to [attach the payment method](/payments/save-during-payment) to the Customer after the PaymentIntent is confirmed and the customer completes any required actions. If you don't provide a Customer, you can still [attach](/api/payment_methods/attach) the payment method to a Customer after the transaction completes.
     *
     * If the payment method is `card_present` and isn't a digital wallet, Stripe creates and attaches a [generated_card](/api/charges/object#charge_object-payment_method_details-card_present-generated_card) payment method representing the card to the Customer instead.
     *
     * When processing card payments, Stripe uses `setup_future_usage` to help you comply with regional legislation and network rules, such as [SCA](/strong-customer-authentication).
     */
    public \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\FutureUsageEnum $setup_future_usage;
    /**
     * Provides information about a card payment that customers see on their statements. Concatenated with the Kana prefix (shortened Kana descriptor) or Kana statement descriptor that’s set on the account to form the complete statement descriptor. Maximum 22 characters. On card statements, the *concatenation* of both prefix and suffix (including separators) will appear truncated to 22 characters.
     */
    public string $statement_descriptor_suffix_kana {
        set {
            $this->assigning('statement_descriptor_suffix_kana', $value);
            $this->statement_descriptor_suffix_kana = $value;
        }
    }
    /**
     * Provides information about a card payment that customers see on their statements. Concatenated with the Kanji prefix (shortened Kanji descriptor) or Kanji statement descriptor that’s set on the account to form the complete statement descriptor. Maximum 17 characters. On card statements, the *concatenation* of both prefix and suffix (including separators) will appear truncated to 17 characters.
     */
    public string $statement_descriptor_suffix_kanji {
        set {
            $this->assigning('statement_descriptor_suffix_kanji', $value);
            $this->statement_descriptor_suffix_kanji = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'installments' => $value === null || $value instanceof \stdClass ? $this->installments = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodOptionsCardInstallments($value) : parent::assignMember($name, $value),
            'mandate_options' => $value === null || $value instanceof \stdClass ? $this->mandate_options = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodOptionsCardMandateOptions($value) : parent::assignMember($name, $value),
            'network' => $value === null || is_string($value) ? $this->network = $value === null ? null : \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\NetworkEnum::from($value) : parent::assignMember($name, $value),
            'request_extended_authorization' => is_string($value) ? $this->request_extended_authorization = \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\ExtendedAuthorizationEnum::from($value) : parent::assignMember($name, $value),
            'request_incremental_authorization' => is_string($value) ? $this->request_incremental_authorization = \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\IncrementalAuthorizationEnum::from($value) : parent::assignMember($name, $value),
            'request_multicapture' => is_string($value) ? $this->request_multicapture = \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\MulticaptureEnum::from($value) : parent::assignMember($name, $value),
            'request_overcapture' => is_string($value) ? $this->request_overcapture = \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\OvercaptureEnum::from($value) : parent::assignMember($name, $value),
            'request_three_d_secure' => $value === null || is_string($value) ? $this->request_three_d_secure = $value === null ? null : \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\DSecureEnum::from($value) : parent::assignMember($name, $value),
            'require_cvc_recollection' => is_bool($value) ? $this->require_cvc_recollection = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'statement_descriptor_suffix_kana' => is_string($value) ? $this->statement_descriptor_suffix_kana = $value : parent::assignMember($name, $value),
            'statement_descriptor_suffix_kanji' => is_string($value) ? $this->statement_descriptor_suffix_kanji = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
