<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Event
 *
 * Event reported for this payment evaluation.
 */
final class Event extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'occurred_at',
        'type',
    ];

    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\DisputeOpened $dispute_opened;
    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\EarlyFraudWarningReceived $early_fraud_warning_received;
    /**
     * Timestamp when the event occurred.
     * Format: unix-time
     */
    public int $occurred_at;
    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Refunded $refunded;
    /**
     * Indicates the type of event attached to the payment evaluation.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\Event\TypeEnum $type;
    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\UserInterventionRaised $user_intervention_raised;
    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\UserInterventionResolved $user_intervention_resolved;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dispute_opened' => $value instanceof \stdClass ? $this->dispute_opened = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\DisputeOpened($value) : parent::assignMember($name, $value),
            'early_fraud_warning_received' => $value instanceof \stdClass ? $this->early_fraud_warning_received = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\EarlyFraudWarningReceived($value) : parent::assignMember($name, $value),
            'occurred_at' => is_int($value) ? $this->occurred_at = $value : parent::assignMember($name, $value),
            'refunded' => $value instanceof \stdClass ? $this->refunded = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Refunded($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\Event\TypeEnum::from($value) : parent::assignMember($name, $value),
            'user_intervention_raised' => $value instanceof \stdClass ? $this->user_intervention_raised = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\UserInterventionRaised($value) : parent::assignMember($name, $value),
            'user_intervention_resolved' => $value instanceof \stdClass ? $this->user_intervention_resolved = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\UserInterventionResolved($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
