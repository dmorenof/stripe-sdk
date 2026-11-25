<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextActionCardAwaitNotification
 */
final class IntentNextActionCardAwaitNotification extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The time that payment will be attempted. If customer approval is required, they need to provide approval before this time.
     * Format: unix-time
     */
    public ?int $charge_attempt_at;
    /**
     * For payments greater than INR 15000, the customer must provide explicit approval of the payment with their bank. For payments of lower amount, no customer action is required.
     */
    public ?bool $customer_approval_required;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'charge_attempt_at' => $value === null || is_int($value) ? $this->charge_attempt_at = $value : parent::assignMember($name, $value),
            'customer_approval_required' => $value === null || is_bool($value) ? $this->customer_approval_required = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
