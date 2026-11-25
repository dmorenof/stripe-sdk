<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessment;

/**
 * fraud_risk_specs
 */
final class FraudRiskRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'level',
    ];

    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessment\FraudRisk\RiskLevelEnum $level;
    public float $score;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'level' => is_string($value) ? $this->level = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessment\FraudRisk\RiskLevelEnum::from($value) : parent::assignMember($name, $value),
            'score' => is_float($value) ? $this->score = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
