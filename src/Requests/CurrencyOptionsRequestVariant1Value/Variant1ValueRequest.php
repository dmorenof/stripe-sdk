<?php

declare(strict_types=1);

namespace StripeSDK\Requests\CurrencyOptionsRequestVariant1Value;

/**
 * currency_option
 */
final class Variant1ValueRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\CurrencyOptionsRequestVariant1Value\UnitAmountRequest $custom_unit_amount;
    public \StripeSDK\Enums\CurrencyOptionsRequestVariant1Value\TaxBehaviorEnum $tax_behavior;
    public \StripeSDK\Collections\CurrencyOptionsRequestVariant1Value\CurrencyOptionsRequestVariant1ValueTiersCollection $tiers;
    public int $unit_amount;
    /**
     * Format: decimal
     */
    public string $unit_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\CurrencyOptionsRequestVariant1Value\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'unit_amount' => is_int($value) ? $this->unit_amount = $value : parent::assignMember($name, $value),
            'unit_amount_decimal' => is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
