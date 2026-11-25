<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * TopupResourcePaymentMethodOptions
 */
final class TopupResourcePaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * If this top-up is to be used with a `us_bank_account` payment method, this sub-hash contains configuration for it.
     */
    public ?\StripeSDK\DTOs\TopupResourceUsBankAccount $us_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'us_bank_account' => $value === null || $value instanceof \stdClass ? $this->us_bank_account = $value === null ? null : new \StripeSDK\DTOs\TopupResourceUsBankAccount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
