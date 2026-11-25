<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * subscription_payment_method_options_mandate_options_blik
 */
final class PaymentMethodOptionsMandateOptionsBlik extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Date when the mandate expires and no further payments will be charged. If not provided, the mandate will be set to be indefinite.
     * Format: unix-time
     */
    public ?int $expires_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
