<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessment;

/**
 * card_testing_risk_specs
 */
final class TestingRiskRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'level',
    ];

    public int $invalid_account_number_decline_rate_past_hour;
    public int $invalid_credentials_decline_rate_past_hour;
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessment\CardTestingRisk\RiskLevelEnum $level;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'invalid_account_number_decline_rate_past_hour' => is_int($value) ? $this->invalid_account_number_decline_rate_past_hour = $value : parent::assignMember($name, $value),
            'invalid_credentials_decline_rate_past_hour' => is_int($value) ? $this->invalid_credentials_decline_rate_past_hour = $value : parent::assignMember($name, $value),
            'level' => is_string($value) ? $this->level = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessment\CardTestingRisk\RiskLevelEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
