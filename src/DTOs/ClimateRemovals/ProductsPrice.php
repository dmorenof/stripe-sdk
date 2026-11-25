<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ClimateRemovals;

/**
 * ClimateRemovalsProductsPrice
 */
final class ProductsPrice extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_fees',
        'amount_subtotal',
        'amount_total',
    ];

    /**
     * Fees for one metric ton of carbon removal in the currency's smallest unit.
     */
    public int $amount_fees;
    /**
     * Subtotal for one metric ton of carbon removal (excluding fees) in the currency's smallest unit.
     */
    public int $amount_subtotal;
    /**
     * Total for one metric ton of carbon removal (including fees) in the currency's smallest unit.
     */
    public int $amount_total;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_fees' => is_int($value) ? $this->amount_fees = $value : parent::assignMember($name, $value),
            'amount_subtotal' => is_int($value) ? $this->amount_subtotal = $value : parent::assignMember($name, $value),
            'amount_total' => is_int($value) ? $this->amount_total = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
