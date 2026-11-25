<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceConsentCollection
 */
final class LinksResourceConsentCollection extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Settings related to the payment method reuse text shown in the Checkout UI.
     */
    public ?\StripeSDK\DTOs\Payment\LinksResourcePaymentMethodReuseAgreement $payment_method_reuse_agreement;
    /**
     * If set to `auto`, enables the collection of customer consent for promotional communications.
     */
    public ?\StripeSDK\Enums\Payment\LinksResourceConsentCollection\PromotionsEnum $promotions;
    /**
     * If set to `required`, it requires cutomers to accept the terms of service before being able to pay. If set to `none`, customers won't be shown a checkbox to accept the terms of service.
     */
    public ?\StripeSDK\Enums\Payment\LinksResourceConsentCollection\TermsServiceEnum $terms_of_service;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_method_reuse_agreement' => $value === null || $value instanceof \stdClass ? $this->payment_method_reuse_agreement = $value === null ? null : new \StripeSDK\DTOs\Payment\LinksResourcePaymentMethodReuseAgreement($value) : parent::assignMember($name, $value),
            'promotions' => $value === null || is_string($value) ? $this->promotions = $value === null ? null : \StripeSDK\Enums\Payment\LinksResourceConsentCollection\PromotionsEnum::from($value) : parent::assignMember($name, $value),
            'terms_of_service' => $value === null || is_string($value) ? $this->terms_of_service = $value === null ? null : \StripeSDK\Enums\Payment\LinksResourceConsentCollection\TermsServiceEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
