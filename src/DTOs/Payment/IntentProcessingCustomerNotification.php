<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentProcessingCustomerNotification
 */
final class IntentProcessingCustomerNotification extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Whether customer approval has been requested for this payment. For payments greater than INR 15000 or mandate amount, the customer must provide explicit approval of the payment with their bank.
     */
    public ?bool $approval_requested;
    /**
     * If customer approval is required, they need to provide approval before this time.
     * Format: unix-time
     */
    public ?int $completes_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'approval_requested' => $value === null || is_bool($value) ? $this->approval_requested = $value : parent::assignMember($name, $value),
            'completes_at' => $value === null || is_int($value) ? $this->completes_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
