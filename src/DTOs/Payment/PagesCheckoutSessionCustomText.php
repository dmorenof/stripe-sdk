<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionCustomText
 */
final class PagesCheckoutSessionCustomText extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Custom text that should be displayed after the payment confirmation button.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomTextPosition $after_submit;
    /**
     * Custom text that should be displayed alongside shipping address collection.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomTextPosition $shipping_address;
    /**
     * Custom text that should be displayed alongside the payment confirmation button.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomTextPosition $submit;
    /**
     * Custom text that should be displayed in place of the default terms of service agreement text.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomTextPosition $terms_of_service_acceptance;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'after_submit' => $value === null || $value instanceof \stdClass ? $this->after_submit = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomTextPosition($value) : parent::assignMember($name, $value),
            'shipping_address' => $value === null || $value instanceof \stdClass ? $this->shipping_address = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomTextPosition($value) : parent::assignMember($name, $value),
            'submit' => $value === null || $value instanceof \stdClass ? $this->submit = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomTextPosition($value) : parent::assignMember($name, $value),
            'terms_of_service_acceptance' => $value === null || $value instanceof \stdClass ? $this->terms_of_service_acceptance = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomTextPosition($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
