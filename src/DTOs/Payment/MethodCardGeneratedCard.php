<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_card_generated_card
 */
final class MethodCardGeneratedCard extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'charge' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The charge that created this object.
     */
    public ?string $charge {
        set {
            $this->assigning('charge', $value);
            $this->charge = $value;
        }
    }
    /**
     * Transaction-specific details of the payment method used in the payment.
     */
    public ?\StripeSDK\DTOs\Card\GeneratedFromPaymentMethodDetails $payment_method_details;
    /**
     * The ID of the SetupAttempt that generated this PaymentMethod, if any.
     */
    public ?\StripeSDK\DTOs\Payment\MethodCardGeneratedCard\SetupAttemptDTO $setup_attempt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'charge' => $value === null || is_string($value) ? $this->charge = $value : parent::assignMember($name, $value),
            'payment_method_details' => $value === null || $value instanceof \stdClass ? $this->payment_method_details = $value === null ? null : new \StripeSDK\DTOs\Card\GeneratedFromPaymentMethodDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
