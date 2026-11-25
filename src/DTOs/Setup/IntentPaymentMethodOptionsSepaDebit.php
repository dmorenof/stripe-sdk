<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * setup_intent_payment_method_options_sepa_debit
 */
final class IntentPaymentMethodOptionsSepaDebit extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptionsMandateOptionsSepaDebit $mandate_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_options' => $value instanceof \stdClass ? $this->mandate_options = new \StripeSDK\DTOs\Setup\IntentPaymentMethodOptionsMandateOptionsSepaDebit($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
