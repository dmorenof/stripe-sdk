<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * setup_intent_payment_method_options_upi
 */
final class IntentPaymentMethodOptionsUpi extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\MethodOptionsMandateOptionsUpi $mandate_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_options' => $value instanceof \stdClass ? $this->mandate_options = new \StripeSDK\DTOs\Payment\MethodOptionsMandateOptionsUpi($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
