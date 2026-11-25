<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post\BusinessProfile;

/**
 * annual_revenue_specs
 */
final class AnnualRevenueRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
        'fiscal_year_end',
    ];

    protected const array VALIDATION = [
        'fiscal_year_end' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    /**
     * Format: currency
     */
    public string $currency;
    public string $fiscal_year_end {
        set {
            $this->assigning('fiscal_year_end', $value);
            $this->fiscal_year_end = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'fiscal_year_end' => is_string($value) ? $this->fiscal_year_end = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
