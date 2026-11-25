<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionFuelData
 */
final class TransactionFuelData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
        'unit',
        'unit_cost_decimal',
    ];

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
     * The type of fuel that was purchased. One of `diesel`, `unleaded_plus`, `unleaded_regular`, `unleaded_super`, or `other`.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    /**
     * The units for `quantity_decimal`. One of `charging_minute`, `imperial_gallon`, `kilogram`, `kilowatt_hour`, `liter`, `pound`, `us_gallon`, or `other`.
     */
    public string $unit {
        set {
            $this->assigning('unit', $value);
            $this->unit = $value;
        }
    }
    /**
     * The cost in cents per each unit of fuel, represented as a decimal string with at most 12 decimal places.
     * Format: decimal
     */
    public string $unit_cost_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'industry_product_code' => $value === null || is_string($value) ? $this->industry_product_code = $value : parent::assignMember($name, $value),
            'quantity_decimal' => $value === null || is_string($value) ? $this->quantity_decimal = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'unit' => is_string($value) ? $this->unit = $value : parent::assignMember($name, $value),
            'unit_cost_decimal' => is_string($value) ? $this->unit_cost_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
