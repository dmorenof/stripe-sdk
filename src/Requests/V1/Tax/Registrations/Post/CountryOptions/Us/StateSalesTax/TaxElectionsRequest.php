<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\StateSalesTax;

/**
 * state_sales_tax_election
 */
final class TaxElectionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'jurisdiction' => [
            'maxLength' => 5000,
        ],
    ];

    public string $jurisdiction {
        set {
            $this->assigning('jurisdiction', $value);
            $this->jurisdiction = $value;
        }
    }
    public \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Us\StateSalesTax\ElectionsItem\ElectionsItemTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'jurisdiction' => is_string($value) ? $this->jurisdiction = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Us\StateSalesTax\ElectionsItem\ElectionsItemTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
