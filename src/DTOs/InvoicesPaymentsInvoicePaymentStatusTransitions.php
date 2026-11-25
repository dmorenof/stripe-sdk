<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * InvoicesPaymentsInvoicePaymentStatusTransitions
 */
final class InvoicesPaymentsInvoicePaymentStatusTransitions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The time that the payment was canceled.
     * Format: unix-time
     */
    public ?int $canceled_at;
    /**
     * The time that the payment succeeded.
     * Format: unix-time
     */
    public ?int $paid_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'canceled_at' => $value === null || is_int($value) ? $this->canceled_at = $value : parent::assignMember($name, $value),
            'paid_at' => $value === null || is_int($value) ? $this->paid_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
