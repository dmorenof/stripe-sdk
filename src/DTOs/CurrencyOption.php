<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * CurrencyOption
 */
final class CurrencyOption extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * When set, provides configuration for the amount to be adjusted by the customer during Checkout Sessions and Payment Links.
     */
    public ?\StripeSDK\DTOs\CustomUnitAmount $custom_unit_amount;
    /**
     * Only required if a [default tax behavior](https://docs.stripe.com/tax/products-prices-tax-categories-tax-behavior#setting-a-default-tax-behavior-(recommended)) was not provided in the Stripe Tax settings. Specifies whether the price is considered inclusive of taxes or exclusive of taxes. One of `inclusive`, `exclusive`, or `unspecified`. Once specified as either `inclusive` or `exclusive`, it cannot be changed.
     */
    public ?\StripeSDK\Enums\CurrencyOption\TaxBehaviorEnum $tax_behavior;
    /**
     * Each element represents a pricing tier. This parameter requires `billing_scheme` to be set to `tiered`. See also the documentation for `billing_scheme`.
     */
    public \StripeSDK\Collections\CurrencyOption\TiersCollection $tiers;
    /**
     * The unit amount in cents (or local equivalent) to be charged, represented as a whole integer if possible. Only set if `billing_scheme=per_unit`.
     */
    public ?int $unit_amount;
    /**
     * The unit amount in cents (or local equivalent) to be charged, represented as a decimal string with at most 12 decimal places. Only set if `billing_scheme=per_unit`.
     * Format: decimal
     */
    public ?string $unit_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_unit_amount' => $value === null || $value instanceof \stdClass ? $this->custom_unit_amount = $value === null ? null : new \StripeSDK\DTOs\CustomUnitAmount($value) : parent::assignMember($name, $value),
            'tax_behavior' => $value === null || is_string($value) ? $this->tax_behavior = $value === null ? null : \StripeSDK\Enums\CurrencyOption\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'tiers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tiers = new \StripeSDK\Collections\CurrencyOption\TiersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\PriceTier::class)) : parent::assignMember($name, $value),
            'unit_amount' => $value === null || is_int($value) ? $this->unit_amount = $value : parent::assignMember($name, $value),
            'unit_amount_decimal' => $value === null || is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
