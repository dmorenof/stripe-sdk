<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionConsentCollection
 */
final class PagesCheckoutSessionConsentCollection extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * If set to `hidden`, it will hide legal text related to the reuse of a payment method.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionPaymentMethodReuseAgreement $payment_method_reuse_agreement;
    /**
     * If set to `auto`, enables the collection of customer consent for promotional communications. The Checkout
     * Session will determine whether to display an option to opt into promotional communication
     * from the merchant depending on the customer's locale. Only available to US merchants and US customers.
     */
    public ?\StripeSDK\Enums\Payment\PagesCheckoutSessionConsentCollection\PromotionsEnum $promotions;
    /**
     * If set to `required`, it requires customers to accept the terms of service before being able to pay.
     */
    public ?\StripeSDK\Enums\Payment\PagesCheckoutSessionConsentCollection\TermsServiceEnum $terms_of_service;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_method_reuse_agreement' => $value === null || $value instanceof \stdClass ? $this->payment_method_reuse_agreement = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionPaymentMethodReuseAgreement($value) : parent::assignMember($name, $value),
            'promotions' => $value === null || is_string($value) ? $this->promotions = $value === null ? null : \StripeSDK\Enums\Payment\PagesCheckoutSessionConsentCollection\PromotionsEnum::from($value) : parent::assignMember($name, $value),
            'terms_of_service' => $value === null || is_string($value) ? $this->terms_of_service = $value === null ? null : \StripeSDK\Enums\Payment\PagesCheckoutSessionConsentCollection\TermsServiceEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
