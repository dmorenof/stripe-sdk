<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * subscription_payment_method_options_pix
 */
final class PaymentMethodOptionsPix extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The number of seconds (between 10 and 1209600) after which Pix payment will expire. Defaults to 86400 seconds.
     */
    public int $expires_after_seconds;
    public \StripeSDK\DTOs\Subscription\PaymentMethodOptionsMandateOptionsPix $mandate_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_after_seconds' => is_int($value) ? $this->expires_after_seconds = $value : parent::assignMember($name, $value),
            'mandate_options' => $value instanceof \stdClass ? $this->mandate_options = new \StripeSDK\DTOs\Subscription\PaymentMethodOptionsMandateOptionsPix($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
