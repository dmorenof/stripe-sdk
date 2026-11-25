<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InvoicesResource;

/**
 * InvoicesResourceStatusTransitions
 */
final class StatusTransitions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The time that the invoice draft was finalized.
     * Format: unix-time
     */
    public ?int $finalized_at;
    /**
     * The time that the invoice was marked uncollectible.
     * Format: unix-time
     */
    public ?int $marked_uncollectible_at;
    /**
     * The time that the invoice was paid.
     * Format: unix-time
     */
    public ?int $paid_at;
    /**
     * The time that the invoice was voided.
     * Format: unix-time
     */
    public ?int $voided_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'finalized_at' => $value === null || is_int($value) ? $this->finalized_at = $value : parent::assignMember($name, $value),
            'marked_uncollectible_at' => $value === null || is_int($value) ? $this->marked_uncollectible_at = $value : parent::assignMember($name, $value),
            'paid_at' => $value === null || is_int($value) ? $this->paid_at = $value : parent::assignMember($name, $value),
            'voided_at' => $value === null || is_int($value) ? $this->voided_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
