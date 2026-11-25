<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\BusinessProfile;

/**
 * monthly_estimated_revenue_specs
 */
final class EstimatedRevenueRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
    ];

    public int $amount;
    /**
     * Format: currency
     */
    public string $currency;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
