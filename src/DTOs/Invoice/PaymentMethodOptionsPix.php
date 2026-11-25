<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_payment_method_options_pix
 */
final class PaymentMethodOptionsPix extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Determines if the amount includes the IOF tax.
     */
    public ?\StripeSDK\Enums\Invoice\PaymentMethodOptionsPix\IncludesIofEnum $amount_includes_iof;
    /**
     * The number of seconds (between 10 and 1209600) after which Pix payment will expire. Defaults to 86400 seconds.
     */
    public int $expires_after_seconds;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_includes_iof' => $value === null || is_string($value) ? $this->amount_includes_iof = $value === null ? null : \StripeSDK\Enums\Invoice\PaymentMethodOptionsPix\IncludesIofEnum::from($value) : parent::assignMember($name, $value),
            'expires_after_seconds' => is_int($value) ? $this->expires_after_seconds = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
