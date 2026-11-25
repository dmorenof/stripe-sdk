<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_payment_method_options_acss_debit
 */
final class PaymentMethodOptionsAcssDebit extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Invoice\PaymentMethodOptionsAcssDebitMandateOptions $mandate_options;
    /**
     * Bank account verification method. The default value is `automatic`.
     */
    public \StripeSDK\Enums\Invoice\PaymentMethodOptionsAcssDebit\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_options' => $value instanceof \stdClass ? $this->mandate_options = new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsAcssDebitMandateOptions($value) : parent::assignMember($name, $value),
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\Invoice\PaymentMethodOptionsAcssDebit\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
