<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Credit;

/**
 * CreditBalance
 */
final class Balance extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'available_balance',
        'ledger_balance',
    ];

    public \StripeSDK\DTOs\Billing\CreditGrantsResourceAmount $available_balance;
    public \StripeSDK\DTOs\Billing\CreditGrantsResourceAmount $ledger_balance;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'available_balance' => $value instanceof \stdClass ? $this->available_balance = new \StripeSDK\DTOs\Billing\CreditGrantsResourceAmount($value) : parent::assignMember($name, $value),
            'ledger_balance' => $value instanceof \stdClass ? $this->ledger_balance = new \StripeSDK\DTOs\Billing\CreditGrantsResourceAmount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
