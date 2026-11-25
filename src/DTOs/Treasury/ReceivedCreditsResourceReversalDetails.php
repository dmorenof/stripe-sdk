<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryReceivedCreditsResourceReversalDetails
 */
final class ReceivedCreditsResourceReversalDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Time before which a ReceivedCredit can be reversed.
     * Format: unix-time
     */
    public ?int $deadline;
    /**
     * Set if a ReceivedCredit cannot be reversed.
     */
    public ?\StripeSDK\Enums\Treasury\ReceivedCreditsResourceReversalDetails\RestrictedReasonEnum $restricted_reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deadline' => $value === null || is_int($value) ? $this->deadline = $value : parent::assignMember($name, $value),
            'restricted_reason' => $value === null || is_string($value) ? $this->restricted_reason = $value === null ? null : \StripeSDK\Enums\Treasury\ReceivedCreditsResourceReversalDetails\RestrictedReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
