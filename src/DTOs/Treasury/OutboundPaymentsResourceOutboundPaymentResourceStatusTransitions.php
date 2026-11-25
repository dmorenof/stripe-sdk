<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryOutboundPaymentsResourceOutboundPaymentResourceStatusTransitions
 */
final class OutboundPaymentsResourceOutboundPaymentResourceStatusTransitions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Timestamp describing when an OutboundPayment changed status to `canceled`.
     * Format: unix-time
     */
    public ?int $canceled_at;
    /**
     * Timestamp describing when an OutboundPayment changed status to `failed`.
     * Format: unix-time
     */
    public ?int $failed_at;
    /**
     * Timestamp describing when an OutboundPayment changed status to `posted`.
     * Format: unix-time
     */
    public ?int $posted_at;
    /**
     * Timestamp describing when an OutboundPayment changed status to `returned`.
     * Format: unix-time
     */
    public ?int $returned_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'canceled_at' => $value === null || is_int($value) ? $this->canceled_at = $value : parent::assignMember($name, $value),
            'failed_at' => $value === null || is_int($value) ? $this->failed_at = $value : parent::assignMember($name, $value),
            'posted_at' => $value === null || is_int($value) ? $this->posted_at = $value : parent::assignMember($name, $value),
            'returned_at' => $value === null || is_int($value) ? $this->returned_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
