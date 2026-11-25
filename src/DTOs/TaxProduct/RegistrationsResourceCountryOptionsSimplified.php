<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductRegistrationsResourceCountryOptionsSimplified
 */
final class RegistrationsResourceCountryOptionsSimplified extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Type of registration in `country`.
     */
    public \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsSimplified\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsSimplified\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
