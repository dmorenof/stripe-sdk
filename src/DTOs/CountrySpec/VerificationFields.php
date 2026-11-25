<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\CountrySpec;

/**
 * CountrySpecVerificationFields
 */
final class VerificationFields extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'company',
        'individual',
    ];

    public \StripeSDK\DTOs\CountrySpec\VerificationFieldDetails $company;
    public \StripeSDK\DTOs\CountrySpec\VerificationFieldDetails $individual;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'company' => $value instanceof \stdClass ? $this->company = new \StripeSDK\DTOs\CountrySpec\VerificationFieldDetails($value) : parent::assignMember($name, $value),
            'individual' => $value instanceof \stdClass ? $this->individual = new \StripeSDK\DTOs\CountrySpec\VerificationFieldDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
