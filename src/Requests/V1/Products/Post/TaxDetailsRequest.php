<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Products\Post;

/**
 * tax_details
 *
 * Tax details for this product, including the [tax code](/tax/tax-codes) and an optional performance location.
 */
final class TaxDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'performance_location' => [
            'maxLength' => 5000,
        ],
    ];

    public string $performance_location {
        set {
            $this->assigning('performance_location', $value);
            $this->performance_location = $value;
        }
    }
    public \StripeSDK\Requests\V1\Products\Post\TaxDetails\TaxCodeRequest $tax_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'performance_location' => is_string($value) ? $this->performance_location = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
