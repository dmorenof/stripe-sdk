<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryTransactionsResourceAbstractTransactionResourceStatusTransitions
 */
final class TransactionsResourceAbstractTransactionResourceStatusTransitions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Timestamp describing when the Transaction changed status to `posted`.
     * Format: unix-time
     */
    public ?int $posted_at;
    /**
     * Timestamp describing when the Transaction changed status to `void`.
     * Format: unix-time
     */
    public ?int $void_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'posted_at' => $value === null || is_int($value) ? $this->posted_at = $value : parent::assignMember($name, $value),
            'void_at' => $value === null || is_int($value) ? $this->void_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
