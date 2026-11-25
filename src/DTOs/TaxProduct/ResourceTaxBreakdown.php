<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceTaxBreakdown
 */
final class ResourceTaxBreakdown extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'inclusive',
        'tax_rate_details',
        'taxability_reason',
        'taxable_amount',
    ];

    /**
     * The amount of tax, in the [smallest currency unit](https://docs.stripe.com/currencies#minor-units).
     */
    public int $amount;
    /**
     * Specifies whether the tax amount is included in the line item amount.
     */
    public bool $inclusive;
    public \StripeSDK\DTOs\TaxProduct\ResourceTaxRateDetails $tax_rate_details;
    /**
     * The reasoning behind this tax, for example, if the product is tax exempt. We might extend the possible values for this field to support new tax rules.
     */
    public \StripeSDK\Enums\TaxProduct\ResourceTaxBreakdown\TaxabilityReasonEnum $taxability_reason;
    /**
     * The amount on which tax is calculated, in the [smallest currency unit](https://docs.stripe.com/currencies#minor-units).
     */
    public int $taxable_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'inclusive' => is_bool($value) ? $this->inclusive = $value : parent::assignMember($name, $value),
            'tax_rate_details' => $value instanceof \stdClass ? $this->tax_rate_details = new \StripeSDK\DTOs\TaxProduct\ResourceTaxRateDetails($value) : parent::assignMember($name, $value),
            'taxability_reason' => is_string($value) ? $this->taxability_reason = \StripeSDK\Enums\TaxProduct\ResourceTaxBreakdown\TaxabilityReasonEnum::from($value) : parent::assignMember($name, $value),
            'taxable_amount' => is_int($value) ? $this->taxable_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
