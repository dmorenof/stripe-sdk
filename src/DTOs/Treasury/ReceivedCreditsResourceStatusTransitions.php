<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryReceivedCreditsResourceStatusTransitions
 */
final class ReceivedCreditsResourceStatusTransitions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Timestamp describing when the CreditReversal changed status to `posted`
     * Format: unix-time
     */
    public ?int $posted_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'posted_at' => $value === null || is_int($value) ? $this->posted_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
