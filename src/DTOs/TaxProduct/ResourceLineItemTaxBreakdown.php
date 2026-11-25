<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceLineItemTaxBreakdown
 */
final class ResourceLineItemTaxBreakdown extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'jurisdiction',
        'sourcing',
        'taxability_reason',
        'taxable_amount',
    ];

    /**
     * The amount of tax, in the [smallest currency unit](https://docs.stripe.com/currencies#minor-units).
     */
    public int $amount;
    public \StripeSDK\DTOs\TaxProduct\ResourceJurisdiction $jurisdiction;
    /**
     * Indicates whether the jurisdiction was determined by the origin (merchant's address) or destination (customer's address).
     */
    public \StripeSDK\Enums\TaxProduct\ResourceLineItemTaxBreakdown\SourcingEnum $sourcing;
    /**
     * Details regarding the rate for this tax. This field will be `null` when the tax is not imposed, for example if the product is exempt from tax.
     */
    public ?\StripeSDK\DTOs\TaxProduct\ResourceLineItemTaxRateDetails $tax_rate_details;
    /**
     * The reasoning behind this tax, for example, if the product is tax exempt. The possible values for this field may be extended as new tax rules are supported.
     */
    public \StripeSDK\Enums\TaxProduct\ResourceLineItemTaxBreakdown\TaxabilityReasonEnum $taxability_reason;
    /**
     * The amount on which tax is calculated, in the [smallest currency unit](https://docs.stripe.com/currencies#minor-units).
     */
    public int $taxable_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'jurisdiction' => $value instanceof \stdClass ? $this->jurisdiction = new \StripeSDK\DTOs\TaxProduct\ResourceJurisdiction($value) : parent::assignMember($name, $value),
            'sourcing' => is_string($value) ? $this->sourcing = \StripeSDK\Enums\TaxProduct\ResourceLineItemTaxBreakdown\SourcingEnum::from($value) : parent::assignMember($name, $value),
            'tax_rate_details' => $value === null || $value instanceof \stdClass ? $this->tax_rate_details = $value === null ? null : new \StripeSDK\DTOs\TaxProduct\ResourceLineItemTaxRateDetails($value) : parent::assignMember($name, $value),
            'taxability_reason' => is_string($value) ? $this->taxability_reason = \StripeSDK\Enums\TaxProduct\ResourceLineItemTaxBreakdown\TaxabilityReasonEnum::from($value) : parent::assignMember($name, $value),
            'taxable_amount' => is_int($value) ? $this->taxable_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
