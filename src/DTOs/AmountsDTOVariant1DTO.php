<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * tax_amount_with_tax_rate_param
 */
final class AmountsDTOVariant1DTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'tax_rate',
        'taxable_amount',
    ];

    protected const array VALIDATION = [
        'tax_rate' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    public string $tax_rate {
        set {
            $this->assigning('tax_rate', $value);
            $this->tax_rate = $value;
        }
    }
    public int $taxable_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'tax_rate' => is_string($value) ? $this->tax_rate = $value : parent::assignMember($name, $value),
            'taxable_amount' => is_int($value) ? $this->taxable_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
