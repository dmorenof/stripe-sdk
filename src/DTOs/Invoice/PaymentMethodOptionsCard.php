<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_payment_method_options_card
 */
final class PaymentMethodOptionsCard extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Invoice\InstallmentsCard $installments;
    /**
     * We strongly recommend that you rely on our SCA Engine to automatically prompt your customers for authentication based on risk level and [other requirements](https://docs.stripe.com/strong-customer-authentication). However, if you wish to request 3D Secure based on logic from your own fraud engine, provide this option. Read our guide on [manually requesting 3D Secure](https://docs.stripe.com/payments/3d-secure/authentication-flow#manual-three-ds) for more information on how this configuration interacts with Radar and our SCA Engine.
     */
    public ?\StripeSDK\Enums\Invoice\PaymentMethodOptionsCard\DSecureEnum $request_three_d_secure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'installments' => $value instanceof \stdClass ? $this->installments = new \StripeSDK\DTOs\Invoice\InstallmentsCard($value) : parent::assignMember($name, $value),
            'request_three_d_secure' => $value === null || is_string($value) ? $this->request_three_d_secure = $value === null ? null : \StripeSDK\Enums\Invoice\PaymentMethodOptionsCard\DSecureEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
