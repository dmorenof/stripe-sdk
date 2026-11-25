<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * setup_intent_payment_method_options_acss_debit
 */
final class IntentPaymentMethodOptionsAcssDebit extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Currency supported by the bank account
     */
    public ?\StripeSDK\Enums\Setup\IntentPaymentMethodOptionsAcssDebit\CurrencyEnum $currency;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptionsMandateOptionsAcssDebit $mandate_options;
    /**
     * Bank account verification method. The default value is `automatic`.
     */
    public \StripeSDK\Enums\Setup\IntentPaymentMethodOptionsAcssDebit\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => $value === null || is_string($value) ? $this->currency = $value === null ? null : \StripeSDK\Enums\Setup\IntentPaymentMethodOptionsAcssDebit\CurrencyEnum::from($value) : parent::assignMember($name, $value),
            'mandate_options' => $value instanceof \stdClass ? $this->mandate_options = new \StripeSDK\DTOs\Setup\IntentPaymentMethodOptionsMandateOptionsAcssDebit($value) : parent::assignMember($name, $value),
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\Setup\IntentPaymentMethodOptionsAcssDebit\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
