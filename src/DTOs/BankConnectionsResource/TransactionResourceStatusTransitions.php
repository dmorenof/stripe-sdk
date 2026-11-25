<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BankConnectionsResource;

/**
 * BankConnectionsResourceTransactionResourceStatusTransitions
 */
final class TransactionResourceStatusTransitions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Time at which this transaction posted. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $posted_at;
    /**
     * Time at which this transaction was voided. Measured in seconds since the Unix epoch.
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
