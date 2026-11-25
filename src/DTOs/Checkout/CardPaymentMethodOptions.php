<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * CheckoutCardPaymentMethodOptions
 */
final class CardPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'request_three_d_secure',
    ];

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
    public \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\CaptureMethodEnum $capture_method;
    public \StripeSDK\DTOs\Checkout\CardInstallmentsOptions $installments;
    /**
     * Request ability to [capture beyond the standard authorization validity window](/payments/extended-authorization) for this CheckoutSession.
     */
    public \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\ExtendedAuthorizationEnum $request_extended_authorization;
    /**
     * Request ability to [increment the authorization](/payments/incremental-authorization) for this CheckoutSession.
     */
    public \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\IncrementalAuthorizationEnum $request_incremental_authorization;
    /**
     * Request ability to make [multiple captures](/payments/multicapture) for this CheckoutSession.
     */
    public \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\MulticaptureEnum $request_multicapture;
    /**
     * Request ability to [overcapture](/payments/overcapture) for this CheckoutSession.
     */
    public \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\OvercaptureEnum $request_overcapture;
    /**
     * We strongly recommend that you rely on our SCA Engine to automatically prompt your customers for authentication based on risk level and [other requirements](https://docs.stripe.com/strong-customer-authentication). However, if you wish to request 3D Secure based on logic from your own fraud engine, provide this option. If not provided, this value defaults to `automatic`. Read our guide on [manually requesting 3D Secure](https://docs.stripe.com/payments/3d-secure/authentication-flow#manual-three-ds) for more information on how this configuration interacts with Radar and our SCA Engine.
     */
    public \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\DSecureEnum $request_three_d_secure;
    public \StripeSDK\DTOs\Payment\PagesPrivateCardPaymentMethodOptionsResourceRestrictions $restrictions;
    /**
     * Indicates that you intend to make future payments with this PaymentIntent's payment method.
     *
     * If you provide a Customer with the PaymentIntent, you can use this parameter to [attach the payment method](/payments/save-during-payment) to the Customer after the PaymentIntent is confirmed and the customer completes any required actions. If you don't provide a Customer, you can still [attach](/api/payment_methods/attach) the payment method to a Customer after the transaction completes.
     *
     * If the payment method is `card_present` and isn't a digital wallet, Stripe creates and attaches a [generated_card](/api/charges/object#charge_object-payment_method_details-card_present-generated_card) payment method representing the card to the Customer instead.
     *
     * When processing card payments, Stripe uses `setup_future_usage` to help you comply with regional legislation and network rules, such as [SCA](/strong-customer-authentication).
     */
    public \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\FutureUsageEnum $setup_future_usage;
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
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'installments' => $value instanceof \stdClass ? $this->installments = new \StripeSDK\DTOs\Checkout\CardInstallmentsOptions($value) : parent::assignMember($name, $value),
            'request_extended_authorization' => is_string($value) ? $this->request_extended_authorization = \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\ExtendedAuthorizationEnum::from($value) : parent::assignMember($name, $value),
            'request_incremental_authorization' => is_string($value) ? $this->request_incremental_authorization = \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\IncrementalAuthorizationEnum::from($value) : parent::assignMember($name, $value),
            'request_multicapture' => is_string($value) ? $this->request_multicapture = \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\MulticaptureEnum::from($value) : parent::assignMember($name, $value),
            'request_overcapture' => is_string($value) ? $this->request_overcapture = \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\OvercaptureEnum::from($value) : parent::assignMember($name, $value),
            'request_three_d_secure' => is_string($value) ? $this->request_three_d_secure = \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\DSecureEnum::from($value) : parent::assignMember($name, $value),
            'restrictions' => $value instanceof \stdClass ? $this->restrictions = new \StripeSDK\DTOs\Payment\PagesPrivateCardPaymentMethodOptionsResourceRestrictions($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\Checkout\CardPaymentMethodOptions\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'statement_descriptor_suffix_kana' => is_string($value) ? $this->statement_descriptor_suffix_kana = $value : parent::assignMember($name, $value),
            'statement_descriptor_suffix_kanji' => is_string($value) ? $this->statement_descriptor_suffix_kanji = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
