<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\LegalEntity;

/**
 * LegalEntityCompanyVerification
 */
final class CompanyVerification extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'document',
    ];

    public \StripeSDK\DTOs\LegalEntity\CompanyVerificationDocument $document;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'document' => $value instanceof \stdClass ? $this->document = new \StripeSDK\DTOs\LegalEntity\CompanyVerificationDocument($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
