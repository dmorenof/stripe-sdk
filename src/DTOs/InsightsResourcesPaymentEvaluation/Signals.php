<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Payment Evaluation Signal
 *
 * Collection of signals for this payment evaluation.
 */
final class Signals extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fraudulent_payment',
    ];

    /**
     * The likelihood that this `PaymentEvaluation` results in an early fraud warning.
     */
    public ?\StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\SignalV2 $early_fraud_warning;
    /**
     * The likelihood that this `PaymentEvaluation` results in a dispute with reason code `fraudulent`.
     */
    public ?\StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\SignalV2 $fraudulent_dispute;
    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\SignalV2 $fraudulent_payment;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'early_fraud_warning' => $value === null || $value instanceof \stdClass ? $this->early_fraud_warning = $value === null ? null : new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\SignalV2($value) : parent::assignMember($name, $value),
            'fraudulent_dispute' => $value === null || $value instanceof \stdClass ? $this->fraudulent_dispute = $value === null ? null : new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\SignalV2($value) : parent::assignMember($name, $value),
            'fraudulent_payment' => $value instanceof \stdClass ? $this->fraudulent_payment = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\SignalV2($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
