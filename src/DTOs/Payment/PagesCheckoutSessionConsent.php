<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionConsent
 */
final class PagesCheckoutSessionConsent extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * If `opt_in`, the customer consents to receiving promotional communications
     * from the merchant about this Checkout Session.
     */
    public ?\StripeSDK\Enums\Payment\PagesCheckoutSessionConsent\PromotionsEnum $promotions;
    /**
     * If `accepted`, the customer in this Checkout Session has agreed to the merchant's terms of service.
     */
    public ?\StripeSDK\Enums\Payment\PagesCheckoutSessionConsent\TermsServiceEnum $terms_of_service;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'promotions' => $value === null || is_string($value) ? $this->promotions = $value === null ? null : \StripeSDK\Enums\Payment\PagesCheckoutSessionConsent\PromotionsEnum::from($value) : parent::assignMember($name, $value),
            'terms_of_service' => $value === null || is_string($value) ? $this->terms_of_service = $value === null ? null : \StripeSDK\Enums\Payment\PagesCheckoutSessionConsent\TermsServiceEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
