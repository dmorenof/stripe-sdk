<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_p24
 */
final class MethodP24 extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The customer's bank, if provided.
     */
    public ?\StripeSDK\Enums\Payment\MethodP24\BankEnum $bank;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank' => $value === null || is_string($value) ? $this->bank = $value === null ? null : \StripeSDK\Enums\Payment\MethodP24\BankEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
