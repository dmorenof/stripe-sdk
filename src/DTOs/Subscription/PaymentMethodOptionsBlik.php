<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * subscription_payment_method_options_blik
 */
final class PaymentMethodOptionsBlik extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Subscription\PaymentMethodOptionsMandateOptionsBlik $mandate_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_options' => $value instanceof \stdClass ? $this->mandate_options = new \StripeSDK\DTOs\Subscription\PaymentMethodOptionsMandateOptionsBlik($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
