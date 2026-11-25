<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Early Fraud Warning Received
 *
 * Early Fraud Warning Received event details attached to this payment evaluation.
 */
final class EarlyFraudWarningReceived extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fraud_type',
    ];

    /**
     * The type of fraud labeled by the issuer.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\EarlyFraudWarningReceived\FraudTypeEnum $fraud_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fraud_type' => is_string($value) ? $this->fraud_type = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\EarlyFraudWarningReceived\FraudTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
