<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceLineItemTaxRateDetails
 */
final class ResourceLineItemTaxRateDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'display_name',
        'percentage_decimal',
        'tax_type',
    ];

    protected const array VALIDATION = [
        'display_name' => [
            'maxLength' => 5000,
        ],
        'percentage_decimal' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A localized display name for tax type, intended to be human-readable. For example, "Local Sales and Use Tax", "Value-added tax (VAT)", or "Umsatzsteuer (USt.)".
     */
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * The tax rate percentage as a string. For example, 8.5% is represented as "8.5".
     */
    public string $percentage_decimal {
        set {
            $this->assigning('percentage_decimal', $value);
            $this->percentage_decimal = $value;
        }
    }
    /**
     * The tax type, such as `vat` or `sales_tax`.
     */
    public \StripeSDK\Enums\TaxProduct\ResourceLineItemTaxRateDetails\TaxTypeEnum $tax_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'percentage_decimal' => is_string($value) ? $this->percentage_decimal = $value : parent::assignMember($name, $value),
            'tax_type' => is_string($value) ? $this->tax_type = \StripeSDK\Enums\TaxProduct\ResourceLineItemTaxRateDetails\TaxTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
