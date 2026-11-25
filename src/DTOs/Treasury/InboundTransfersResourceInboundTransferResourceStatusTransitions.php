<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryInboundTransfersResourceInboundTransferResourceStatusTransitions
 */
final class InboundTransfersResourceInboundTransferResourceStatusTransitions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Timestamp describing when an InboundTransfer changed status to `canceled`.
     * Format: unix-time
     */
    public ?int $canceled_at;
    /**
     * Timestamp describing when an InboundTransfer changed status to `failed`.
     * Format: unix-time
     */
    public ?int $failed_at;
    /**
     * Timestamp describing when an InboundTransfer changed status to `succeeded`.
     * Format: unix-time
     */
    public ?int $succeeded_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'canceled_at' => $value === null || is_int($value) ? $this->canceled_at = $value : parent::assignMember($name, $value),
            'failed_at' => $value === null || is_int($value) ? $this->failed_at = $value : parent::assignMember($name, $value),
            'succeeded_at' => $value === null || is_int($value) ? $this->succeeded_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
