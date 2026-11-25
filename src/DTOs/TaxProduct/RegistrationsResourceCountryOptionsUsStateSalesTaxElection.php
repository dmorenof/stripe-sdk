<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductRegistrationsResourceCountryOptionsUsStateSalesTaxElection
 */
final class RegistrationsResourceCountryOptionsUsStateSalesTaxElection extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
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
    /**
     * The type of the election for the state sales tax registration.
     */
    public \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsUsStateSalesTaxElection\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'jurisdiction' => is_string($value) ? $this->jurisdiction = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsUsStateSalesTaxElection\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
