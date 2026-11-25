<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingAuthorizationFuelData
 */
final class AuthorizationFuelData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'industry_product_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * [Conexxus Payment System Product Code](https://www.conexxus.org/conexxus-payment-system-product-codes) identifying the primary fuel product purchased.
     */
    public ?string $industry_product_code {
        set {
            $this->assigning('industry_product_code', $value);
            $this->industry_product_code = $value;
        }
    }
    /**
     * The quantity of `unit`s of fuel that was dispensed, represented as a decimal string with at most 12 decimal places.
     * Format: decimal
     */
    public ?string $quantity_decimal;
    /**
     * The type of fuel that was purchased.
     */
    public ?\StripeSDK\Enums\Issuing\AuthorizationFuelData\TypeEnum $type;
    /**
     * The units for `quantity_decimal`.
     */
    public ?\StripeSDK\Enums\Issuing\AuthorizationFuelData\UnitEnum $unit;
    /**
     * The cost in cents per each unit of fuel, represented as a decimal string with at most 12 decimal places.
     * Format: decimal
     */
    public ?string $unit_cost_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'industry_product_code' => $value === null || is_string($value) ? $this->industry_product_code = $value : parent::assignMember($name, $value),
            'quantity_decimal' => $value === null || is_string($value) ? $this->quantity_decimal = $value : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value === null ? null : \StripeSDK\Enums\Issuing\AuthorizationFuelData\TypeEnum::from($value) : parent::assignMember($name, $value),
            'unit' => $value === null || is_string($value) ? $this->unit = $value === null ? null : \StripeSDK\Enums\Issuing\AuthorizationFuelData\UnitEnum::from($value) : parent::assignMember($name, $value),
            'unit_cost_decimal' => $value === null || is_string($value) ? $this->unit_cost_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
