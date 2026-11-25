<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Custom processor detail
 *
 * Custom processors represent payment processors not modeled directly in
 * the Stripe API. This resource consists of details about the custom processor
 * used for this payment attempt.
 */
final class PaymentsPrimitivesPaymentRecordsResourceProcessorDetailsResourceCustomDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'payment_reference' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * An opaque string for manual reconciliation of this payment, for example a check number or a payment processor ID.
     */
    public ?string $payment_reference {
        set {
            $this->assigning('payment_reference', $value);
            $this->payment_reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_reference' => $value === null || is_string($value) ? $this->payment_reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
