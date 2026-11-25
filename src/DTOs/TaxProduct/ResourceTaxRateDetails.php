<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceTaxRateDetails
 */
final class ResourceTaxRateDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'percentage_decimal',
    ];

    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
        'percentage_decimal' => [
            'maxLength' => 5000,
        ],
        'state' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Two-letter country code ([ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)).
     */
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * The amount of the tax rate when the `rate_type` is `flat_amount`. Tax rates with `rate_type` `percentage` can vary based on the transaction, resulting in this field being `null`. This field exposes the amount and currency of the flat tax rate.
     */
    public ?\StripeSDK\DTOs\TaxRateFlatAmount $flat_amount;
    /**
     * The tax rate percentage as a string. For example, 8.5% is represented as `"8.5"`.
     */
    public string $percentage_decimal {
        set {
            $this->assigning('percentage_decimal', $value);
            $this->percentage_decimal = $value;
        }
    }
    /**
     * Indicates the type of tax rate applied to the taxable amount. This value can be `null` when no tax applies to the location. This field is only present for TaxRates created by Stripe Tax.
     */
    public ?\StripeSDK\Enums\TaxProduct\ResourceTaxRateDetails\RateTypeEnum $rate_type;
    /**
     * State, county, province, or region ([ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2)).
     */
    public ?string $state {
        set {
            $this->assigning('state', $value);
            $this->state = $value;
        }
    }
    /**
     * The tax type, such as `vat` or `sales_tax`.
     */
    public ?\StripeSDK\Enums\TaxProduct\ResourceTaxRateDetails\TaxTypeEnum $tax_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'flat_amount' => $value === null || $value instanceof \stdClass ? $this->flat_amount = $value === null ? null : new \StripeSDK\DTOs\TaxRateFlatAmount($value) : parent::assignMember($name, $value),
            'percentage_decimal' => is_string($value) ? $this->percentage_decimal = $value : parent::assignMember($name, $value),
            'rate_type' => $value === null || is_string($value) ? $this->rate_type = $value === null ? null : \StripeSDK\Enums\TaxProduct\ResourceTaxRateDetails\RateTypeEnum::from($value) : parent::assignMember($name, $value),
            'state' => $value === null || is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'tax_type' => $value === null || is_string($value) ? $this->tax_type = $value === null ? null : \StripeSDK\Enums\TaxProduct\ResourceTaxRateDetails\TaxTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
