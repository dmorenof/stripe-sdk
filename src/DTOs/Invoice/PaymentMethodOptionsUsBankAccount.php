<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_payment_method_options_us_bank_account
 */
final class PaymentMethodOptionsUsBankAccount extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Invoice\PaymentMethodOptionsUsBankAccountLinkedAccountOptions $financial_connections;
    /**
     * Bank account verification method. The default value is `automatic`.
     */
    public \StripeSDK\Enums\Invoice\PaymentMethodOptionsUsBankAccount\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'financial_connections' => $value instanceof \stdClass ? $this->financial_connections = new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsUsBankAccountLinkedAccountOptions($value) : parent::assignMember($name, $value),
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\Invoice\PaymentMethodOptionsUsBankAccount\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
