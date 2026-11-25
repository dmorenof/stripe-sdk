<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessment;

/**
 * merchant_dispute_risk_specs
 */
final class DisputeRiskRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'level',
    ];

    public int $dispute_rate;
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessment\MerchantDisputeRisk\RiskLevelEnum $level;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dispute_rate' => is_int($value) ? $this->dispute_rate = $value : parent::assignMember($name, $value),
            'level' => is_string($value) ? $this->level = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessment\MerchantDisputeRisk\RiskLevelEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
