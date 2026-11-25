<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\Fleet\ReportedBreakdown;

/**
 * fleet_reported_breakdown_tax_specs
 */
final class BreakdownTaxRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: decimal
     */
    public string $local_amount_decimal;
    /**
     * Format: decimal
     */
    public string $national_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'local_amount_decimal' => is_string($value) ? $this->local_amount_decimal = $value : parent::assignMember($name, $value),
            'national_amount_decimal' => is_string($value) ? $this->national_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
