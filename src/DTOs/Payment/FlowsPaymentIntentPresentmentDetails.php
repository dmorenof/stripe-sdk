<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPaymentIntentPresentmentDetails
 */
final class FlowsPaymentIntentPresentmentDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'presentment_amount',
        'presentment_currency',
    ];

    protected const array VALIDATION = [
        'presentment_currency' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount intended to be collected by this payment, denominated in `presentment_currency`.
     */
    public int $presentment_amount;
    /**
     * Currency presented to the customer during payment.
     */
    public string $presentment_currency {
        set {
            $this->assigning('presentment_currency', $value);
            $this->presentment_currency = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'presentment_amount' => is_int($value) ? $this->presentment_amount = $value : parent::assignMember($name, $value),
            'presentment_currency' => is_string($value) ? $this->presentment_currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
