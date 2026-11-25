<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\Billing\CreditBalanceSummary\Get\Query;

/**
 * balance_summary_filter_param
 */
final class QueryFilterDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'credit_grant' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\V1\Billing\CreditBalanceSummary\Get\Query\Filter\ApplicabilityScopeDTO $applicability_scope;
    public string $credit_grant {
        set {
            $this->assigning('credit_grant', $value);
            $this->credit_grant = $value;
        }
    }
    public \StripeSDK\Enums\V1\Billing\CreditBalanceSummary\Get\Query\Filter\FilterTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'credit_grant' => is_string($value) ? $this->credit_grant = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Billing\CreditBalanceSummary\Get\Query\Filter\FilterTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
