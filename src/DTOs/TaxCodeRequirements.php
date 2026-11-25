<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * TaxCodeRequirements
 */
final class TaxCodeRequirements extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'performance_location',
    ];

    /**
     * Describes whether a performance location is required for a successful tax calculation with a tax code.
     */
    public \StripeSDK\Enums\TaxCodeRequirements\PerformanceLocationEnum $performance_location;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'performance_location' => is_string($value) ? $this->performance_location = \StripeSDK\Enums\TaxCodeRequirements\PerformanceLocationEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
