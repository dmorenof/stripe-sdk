<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * Tax Detail
 *
 * Tax details contains information about the data that was used to calculate taxes.
 */
final class TaxDetailsResourceTaxDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'performance_location' => [
            'maxLength' => 5000,
        ],
        'tax_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of a tax location with type `performance`, representing where the performance takes place.
     */
    public ?string $performance_location {
        set {
            $this->assigning('performance_location', $value);
            $this->performance_location = $value;
        }
    }
    /**
     * A [tax code](https://docs.stripe.com/tax/tax-categories) ID.
     */
    public ?string $tax_code {
        set {
            $this->assigning('tax_code', $value);
            $this->tax_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'performance_location' => $value === null || is_string($value) ? $this->performance_location = $value : parent::assignMember($name, $value),
            'tax_code' => $value === null || is_string($value) ? $this->tax_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
