<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * setup_intent_payment_method_options_us_bank_account
 */
final class IntentPaymentMethodOptionsUsBankAccount extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\LinkedAccountOptionsCommon $financial_connections;
    public \StripeSDK\DTOs\Payment\MethodOptionsUsBankAccountMandateOptions $mandate_options;
    /**
     * Bank account verification method. The default value is `automatic`.
     */
    public \StripeSDK\Enums\Setup\IntentPaymentMethodOptionsUsBankAccount\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'financial_connections' => $value instanceof \stdClass ? $this->financial_connections = new \StripeSDK\DTOs\LinkedAccountOptionsCommon($value) : parent::assignMember($name, $value),
            'mandate_options' => $value instanceof \stdClass ? $this->mandate_options = new \StripeSDK\DTOs\Payment\MethodOptionsUsBankAccountMandateOptions($value) : parent::assignMember($name, $value),
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\Setup\IntentPaymentMethodOptionsUsBankAccount\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
