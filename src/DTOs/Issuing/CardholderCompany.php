<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardholderCompany
 */
final class CardholderCompany extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'tax_id_provided',
    ];

    /**
     * Whether the company's business ID number was provided.
     */
    public bool $tax_id_provided;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tax_id_provided' => is_bool($value) ? $this->tax_id_provided = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
