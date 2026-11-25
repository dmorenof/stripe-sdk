<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * CheckoutSequraPaymentMethodOptions
 */
final class SequraPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Controls when the funds will be captured from the customer's account.
     */
    public \StripeSDK\Enums\Checkout\SequraPaymentMethodOptions\CaptureMethodEnum $capture_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\Checkout\SequraPaymentMethodOptions\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
