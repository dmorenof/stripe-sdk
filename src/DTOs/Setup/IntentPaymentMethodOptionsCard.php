<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * setup_intent_payment_method_options_card
 */
final class IntentPaymentMethodOptionsCard extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Configuration options for setting up an eMandate for cards issued in India.
     */
    public ?\StripeSDK\DTOs\Setup\IntentPaymentMethodOptionsCardMandateOptions $mandate_options;
    /**
     * Selected network to process this SetupIntent on. Depends on the available networks of the card attached to the setup intent. Can be only set confirm-time.
     */
    public ?\StripeSDK\Enums\Setup\IntentPaymentMethodOptionsCard\NetworkEnum $network;
    /**
     * We strongly recommend that you rely on our SCA Engine to automatically prompt your customers for authentication based on risk level and [other requirements](https://docs.stripe.com/strong-customer-authentication). However, if you wish to request 3D Secure based on logic from your own fraud engine, provide this option. If not provided, this value defaults to `automatic`. Read our guide on [manually requesting 3D Secure](https://docs.stripe.com/payments/3d-secure/authentication-flow#manual-three-ds) for more information on how this configuration interacts with Radar and our SCA Engine.
     */
    public ?\StripeSDK\Enums\Setup\IntentPaymentMethodOptionsCard\DSecureEnum $request_three_d_secure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_options' => $value === null || $value instanceof \stdClass ? $this->mandate_options = $value === null ? null : new \StripeSDK\DTOs\Setup\IntentPaymentMethodOptionsCardMandateOptions($value) : parent::assignMember($name, $value),
            'network' => $value === null || is_string($value) ? $this->network = $value === null ? null : \StripeSDK\Enums\Setup\IntentPaymentMethodOptionsCard\NetworkEnum::from($value) : parent::assignMember($name, $value),
            'request_three_d_secure' => $value === null || is_string($value) ? $this->request_three_d_secure = $value === null ? null : \StripeSDK\Enums\Setup\IntentPaymentMethodOptionsCard\DSecureEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
