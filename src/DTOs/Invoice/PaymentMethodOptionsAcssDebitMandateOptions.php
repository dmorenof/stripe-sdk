<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_payment_method_options_acss_debit_mandate_options
 */
final class PaymentMethodOptionsAcssDebitMandateOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Transaction type of the mandate.
     */
    public ?\StripeSDK\Enums\Invoice\PaymentMethodOptionsAcssDebitMandateOptions\TransactionTypeEnum $transaction_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'transaction_type' => $value === null || is_string($value) ? $this->transaction_type = $value === null ? null : \StripeSDK\Enums\Invoice\PaymentMethodOptionsAcssDebitMandateOptions\TransactionTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
