<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryReceivedDebitsResourceReversalDetails
 */
final class ReceivedDebitsResourceReversalDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Time before which a ReceivedDebit can be reversed.
     * Format: unix-time
     */
    public ?int $deadline;
    /**
     * Set if a ReceivedDebit can't be reversed.
     */
    public ?\StripeSDK\Enums\Treasury\ReceivedDebitsResourceReversalDetails\RestrictedReasonEnum $restricted_reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deadline' => $value === null || is_int($value) ? $this->deadline = $value : parent::assignMember($name, $value),
            'restricted_reason' => $value === null || is_string($value) ? $this->restricted_reason = $value === null ? null : \StripeSDK\Enums\Treasury\ReceivedDebitsResourceReversalDetails\RestrictedReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
