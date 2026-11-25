<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerBalanceResourceCashBalanceTransactionResourceFundedTransaction
 */
final class BalanceResourceCashBalanceTransactionResourceFundedTransaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bank_transfer',
    ];

    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransfer $bank_transfer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_transfer' => $value instanceof \stdClass ? $this->bank_transfer = new \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransfer($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
