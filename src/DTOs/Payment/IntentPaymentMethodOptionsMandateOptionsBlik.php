<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_intent_payment_method_options_mandate_options_blik
 */
final class IntentPaymentMethodOptionsMandateOptionsBlik extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Date at which the mandate expires.
     * Format: unix-time
     */
    public ?int $expires_at;
    /**
     * Type of the mandate.
     */
    public ?\StripeSDK\Enums\Payment\IntentPaymentMethodOptionsMandateOptionsBlik\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value === null ? null : \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsMandateOptionsBlik\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
