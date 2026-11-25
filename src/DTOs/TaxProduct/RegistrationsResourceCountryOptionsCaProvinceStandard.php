<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductRegistrationsResourceCountryOptionsCaProvinceStandard
 */
final class RegistrationsResourceCountryOptionsCaProvinceStandard extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'province',
    ];

    protected const array VALIDATION = [
        'province' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Two-letter CA province code ([ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2)).
     */
    public string $province {
        set {
            $this->assigning('province', $value);
            $this->province = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'province' => is_string($value) ? $this->province = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
