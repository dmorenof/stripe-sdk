<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentMethodConfigResourcePaymentMethodProperties
 */
final class MethodConfigResourcePaymentMethodProperties extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'available',
        'display_preference',
    ];

    /**
     * Whether this payment method may be offered at checkout. True if `display_preference` is `on` and the payment method's capability is active.
     */
    public bool $available;
    public \StripeSDK\DTOs\Payment\MethodConfigResourceDisplayPreference $display_preference;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'available' => is_bool($value) ? $this->available = $value : parent::assignMember($name, $value),
            'display_preference' => $value instanceof \stdClass ? $this->display_preference = new \StripeSDK\DTOs\Payment\MethodConfigResourceDisplayPreference($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
