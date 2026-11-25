<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Payment Evaluation Signal
 *
 * A payment evaluation signal with evaluated_at, risk_level, and score fields.
 */
final class SignalV2 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'evaluated_at',
        'risk_level',
    ];

    /**
     * The time when this signal was evaluated.
     * Format: unix-time
     */
    public int $evaluated_at;
    /**
     * Risk level of this signal, based on the score.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\SignalV2\RiskLevelEnum $risk_level;
    /**
     * Numeric score for this signal, returned with two decimal places. Possible values for evaluated payments are between 0 and 100, where higher scores indicate a higher likelihood of the signal being true.
     */
    public ?float $score;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'evaluated_at' => is_int($value) ? $this->evaluated_at = $value : parent::assignMember($name, $value),
            'risk_level' => is_string($value) ? $this->risk_level = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\SignalV2\RiskLevelEnum::from($value) : parent::assignMember($name, $value),
            'score' => $value === null || is_float($value) ? $this->score = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
