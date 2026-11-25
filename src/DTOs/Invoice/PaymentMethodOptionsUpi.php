<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_payment_method_options_upi
 */
final class PaymentMethodOptionsUpi extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Invoice\PaymentMethodOptionsMandateOptionsUpi $mandate_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_options' => $value instanceof \stdClass ? $this->mandate_options = new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsMandateOptionsUpi($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
