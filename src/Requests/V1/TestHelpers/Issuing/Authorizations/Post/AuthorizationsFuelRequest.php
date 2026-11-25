<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post;

/**
 * fuel_specs
 *
 * Information about fuel that was purchased with this transaction.
 */
final class AuthorizationsFuelRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'industry_product_code' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
        'unit' => [
            'maxLength' => 5000,
        ],
    ];

    public string $industry_product_code {
        set {
            $this->assigning('industry_product_code', $value);
            $this->industry_product_code = $value;
        }
    }
    /**
     * Format: decimal
     */
    public string $quantity_decimal;
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\Fuel\FuelTypeEnum $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\Fuel\FuelUnitEnum $unit {
        set {
            $this->assigning('unit', $value);
            $this->unit = $value;
        }
    }
    /**
     * Format: decimal
     */
    public string $unit_cost_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'industry_product_code' => is_string($value) ? $this->industry_product_code = $value : parent::assignMember($name, $value),
            'quantity_decimal' => is_string($value) ? $this->quantity_decimal = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\Fuel\FuelTypeEnum::from($value) : parent::assignMember($name, $value),
            'unit' => is_string($value) ? $this->unit = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\Fuel\FuelUnitEnum::from($value) : parent::assignMember($name, $value),
            'unit_cost_decimal' => is_string($value) ? $this->unit_cost_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
