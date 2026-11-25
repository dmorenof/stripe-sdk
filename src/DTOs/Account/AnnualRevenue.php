<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountAnnualRevenue
 */
final class AnnualRevenue extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'fiscal_year_end' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A non-negative integer representing the amount in the [smallest currency unit](/currencies#zero-decimal).
     */
    public ?int $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public ?string $currency;
    /**
     * The close-out date of the preceding fiscal year in ISO 8601 format. E.g. 2023-12-31 for the 31st of December, 2023.
     */
    public ?string $fiscal_year_end {
        set {
            $this->assigning('fiscal_year_end', $value);
            $this->fiscal_year_end = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'fiscal_year_end' => $value === null || is_string($value) ? $this->fiscal_year_end = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
