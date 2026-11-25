<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\Prices\Get\Query;

/**
 * all_prices_recurring_params
 */
final class QueryRecurringDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'meter' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\Prices\Get\Query\Recurring\RecurringIntervalEnum $interval;
    public string $meter {
        set {
            $this->assigning('meter', $value);
            $this->meter = $value;
        }
    }
    public \StripeSDK\Enums\V1\Prices\Get\Query\Recurring\UsageTypeEnum $usage_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\V1\Prices\Get\Query\Recurring\RecurringIntervalEnum::from($value) : parent::assignMember($name, $value),
            'meter' => is_string($value) ? $this->meter = $value : parent::assignMember($name, $value),
            'usage_type' => is_string($value) ? $this->usage_type = \StripeSDK\Enums\V1\Prices\Get\Query\Recurring\UsageTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
