<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\LineItems;

/**
 * LineItemsTaxAmount
 */
final class TaxAmount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'rate',
    ];

    /**
     * Amount of tax applied for this rate.
     */
    public int $amount;
    public \StripeSDK\DTOs\TaxRate $rate;
    /**
     * The reasoning behind this tax, for example, if the product is tax exempt. The possible values for this field may be extended as new tax rules are supported.
     */
    public ?\StripeSDK\Enums\LineItems\TaxAmount\TaxabilityReasonEnum $taxability_reason;
    /**
     * The amount on which tax is calculated, in cents (or local equivalent).
     */
    public ?int $taxable_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'rate' => $value instanceof \stdClass ? $this->rate = new \StripeSDK\DTOs\TaxRate($value) : parent::assignMember($name, $value),
            'taxability_reason' => $value === null || is_string($value) ? $this->taxability_reason = $value === null ? null : \StripeSDK\Enums\LineItems\TaxAmount\TaxabilityReasonEnum::from($value) : parent::assignMember($name, $value),
            'taxable_amount' => $value === null || is_int($value) ? $this->taxable_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
