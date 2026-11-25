<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryReceivedDebitsResourceStatusTransitions
 */
final class ReceivedDebitsResourceStatusTransitions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Timestamp describing when the DebitReversal changed status to `completed`.
     * Format: unix-time
     */
    public ?int $completed_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'completed_at' => $value === null || is_int($value) ? $this->completed_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
