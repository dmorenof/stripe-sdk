<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_mandate_options_payto
 */
final class MandateOptionsPayto extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The maximum amount that can be collected in a single invoice. If you don't specify a maximum, then there is no limit.
     */
    public ?int $amount;
    /**
     * Only `maximum` is supported.
     */
    public ?\StripeSDK\Enums\Invoice\MandateOptionsPayto\AmountTypeEnum $amount_type;
    /**
     * The purpose for which payments are made. Has a default value based on your merchant category code.
     */
    public ?\StripeSDK\Enums\Invoice\MandateOptionsPayto\PurposeEnum $purpose;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_type' => $value === null || is_string($value) ? $this->amount_type = $value === null ? null : \StripeSDK\Enums\Invoice\MandateOptionsPayto\AmountTypeEnum::from($value) : parent::assignMember($name, $value),
            'purpose' => $value === null || is_string($value) ? $this->purpose = $value === null ? null : \StripeSDK\Enums\Invoice\MandateOptionsPayto\PurposeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
