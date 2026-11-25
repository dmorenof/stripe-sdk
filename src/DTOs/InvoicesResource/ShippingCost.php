<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InvoicesResource;

/**
 * InvoicesResourceShippingCost
 */
final class ShippingCost extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_subtotal',
        'amount_tax',
        'amount_total',
    ];

    /**
     * Total shipping cost before any taxes are applied.
     */
    public int $amount_subtotal;
    /**
     * Total tax amount applied due to shipping costs. If no tax was applied, defaults to 0.
     */
    public int $amount_tax;
    /**
     * Total shipping cost after taxes are applied.
     */
    public int $amount_total;
    /**
     * The ID of the ShippingRate for this invoice.
     */
    public ?\StripeSDK\DTOs\InvoicesResource\ShippingCost\ShippingRateDTO $shipping_rate;
    /**
     * The taxes applied to the shipping rate.
     */
    public \StripeSDK\Collections\InvoicesResource\ShippingCost\TaxesCollection $taxes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_subtotal' => is_int($value) ? $this->amount_subtotal = $value : parent::assignMember($name, $value),
            'amount_tax' => is_int($value) ? $this->amount_tax = $value : parent::assignMember($name, $value),
            'amount_total' => is_int($value) ? $this->amount_total = $value : parent::assignMember($name, $value),
            'taxes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->taxes = new \StripeSDK\Collections\InvoicesResource\ShippingCost\TaxesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\LineItems\TaxAmount::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
