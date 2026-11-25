<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\QuotesResource;

/**
 * QuotesResourceStatusTransitions
 */
final class StatusTransitions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The time that the quote was accepted. Measured in seconds since Unix epoch.
     * Format: unix-time
     */
    public ?int $accepted_at;
    /**
     * The time that the quote was canceled. Measured in seconds since Unix epoch.
     * Format: unix-time
     */
    public ?int $canceled_at;
    /**
     * The time that the quote was finalized. Measured in seconds since Unix epoch.
     * Format: unix-time
     */
    public ?int $finalized_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accepted_at' => $value === null || is_int($value) ? $this->accepted_at = $value : parent::assignMember($name, $value),
            'canceled_at' => $value === null || is_int($value) ? $this->canceled_at = $value : parent::assignMember($name, $value),
            'finalized_at' => $value === null || is_int($value) ? $this->finalized_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
