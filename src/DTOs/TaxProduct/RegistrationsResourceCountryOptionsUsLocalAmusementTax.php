<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductRegistrationsResourceCountryOptionsUsLocalAmusementTax
 */
final class RegistrationsResourceCountryOptionsUsLocalAmusementTax extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'jurisdiction',
    ];

    protected const array VALIDATION = [
        'jurisdiction' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A [FIPS code](https://www.census.gov/library/reference/code-lists/ansi.html) representing the local jurisdiction.
     */
    public string $jurisdiction {
        set {
            $this->assigning('jurisdiction', $value);
            $this->jurisdiction = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'jurisdiction' => is_string($value) ? $this->jurisdiction = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
