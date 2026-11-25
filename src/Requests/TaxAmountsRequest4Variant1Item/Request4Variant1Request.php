<?php

declare(strict_types=1);

namespace StripeSDK\Requests\TaxAmountsRequest4Variant1Item;

/**
 * tax_amount_param
 */
final class Request4Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'tax_rate_data',
        'taxable_amount',
    ];

    public int $amount;
    public \StripeSDK\Requests\TaxAmountsRequest4Variant1Item\RateDataRequest $tax_rate_data;
    public \StripeSDK\Enums\TaxAmountsRequest4Variant1Item\TaxabilityReasonEnum $taxability_reason;
    public int $taxable_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'taxability_reason' => is_string($value) ? $this->taxability_reason = \StripeSDK\Enums\TaxAmountsRequest4Variant1Item\TaxabilityReasonEnum::from($value) : parent::assignMember($name, $value),
            'taxable_amount' => is_int($value) ? $this->taxable_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
