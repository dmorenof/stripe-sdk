<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Payment Method Detail
 *
 * Payment method details attached to this payment evaluation.
 */
final class PaymentMethodDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_method',
    ];

    /**
     * Billing information associated with the payment evaluation.
     */
    public ?\StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\BillingDetails $billing_details;
    /**
     * The payment method used in this payment evaluation.
     */
    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\PaymentMethodDetails\PaymentMethodDTO $payment_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_details' => $value === null || $value instanceof \stdClass ? $this->billing_details = $value === null ? null : new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\BillingDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
