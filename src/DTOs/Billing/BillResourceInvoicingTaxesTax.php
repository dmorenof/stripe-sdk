<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingBillResourceInvoicingTaxesTax
 */
final class BillResourceInvoicingTaxesTax extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'tax_behavior',
        'taxability_reason',
        'type',
    ];

    /**
     * The amount of the tax, in cents (or local equivalent).
     */
    public int $amount;
    /**
     * Whether this tax is inclusive or exclusive.
     */
    public \StripeSDK\Enums\Billing\BillResourceInvoicingTaxesTax\TaxBehaviorEnum $tax_behavior;
    /**
     * Additional details about the tax rate. Only present when `type` is `tax_rate_details`.
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoicingTaxesTaxRateDetails $tax_rate_details;
    /**
     * The reasoning behind this tax, for example, if the product is tax exempt. The possible values for this field may be extended as new tax rules are supported.
     */
    public \StripeSDK\Enums\Billing\BillResourceInvoicingTaxesTax\TaxabilityReasonEnum $taxability_reason;
    /**
     * The amount on which tax is calculated, in cents (or local equivalent).
     */
    public ?int $taxable_amount;
    /**
     * The type of tax information.
     */
    public \StripeSDK\Enums\Billing\BillResourceInvoicingTaxesTax\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\Billing\BillResourceInvoicingTaxesTax\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'tax_rate_details' => $value === null || $value instanceof \stdClass ? $this->tax_rate_details = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoicingTaxesTaxRateDetails($value) : parent::assignMember($name, $value),
            'taxability_reason' => is_string($value) ? $this->taxability_reason = \StripeSDK\Enums\Billing\BillResourceInvoicingTaxesTax\TaxabilityReasonEnum::from($value) : parent::assignMember($name, $value),
            'taxable_amount' => $value === null || is_int($value) ? $this->taxable_amount = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Billing\BillResourceInvoicingTaxesTax\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
