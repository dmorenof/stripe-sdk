<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * Phase Item
 *
 * A phase item describes the price and quantity of a phase.
 */
final class ScheduleConfigurationItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'discounts',
        'price',
    ];

    /**
     * Define thresholds at which an invoice will be sent, and the related subscription advanced to a new billing period
     */
    public ?\StripeSDK\DTOs\Subscription\ItemBillingThresholds $billing_thresholds;
    /**
     * The discounts applied to the subscription item. Subscription item discounts are applied before subscription discounts. Use `expand[]=discounts` to expand each discount.
     */
    public \StripeSDK\Collections\Subscription\ScheduleConfigurationItem\DiscountsCollection $discounts;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an item. Metadata on this item will update the underlying subscription item's `metadata` when the phase is entered.
     */
    public ?\StripeSDK\DTOs\Subscription\ScheduleConfigurationItem\MetadataMap $metadata;
    /**
     * ID of the price to which the customer should be subscribed.
     */
    public \StripeSDK\DTOs\Subscription\ScheduleConfigurationItem\PriceDTO $price;
    /**
     * Quantity of the plan to which the customer should be subscribed.
     */
    public int $quantity;
    /**
     * The tax rates which apply to this `phase_item`. When set, the `default_tax_rates` on the phase do not apply to this `phase_item`.
     */
    public ?\StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_thresholds' => $value === null || $value instanceof \stdClass ? $this->billing_thresholds = $value === null ? null : new \StripeSDK\DTOs\Subscription\ItemBillingThresholds($value) : parent::assignMember($name, $value),
            'discounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->discounts = new \StripeSDK\Collections\Subscription\ScheduleConfigurationItem\DiscountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\StackableDiscountWithDiscountSettings::class)) : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'tax_rates' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->tax_rates = $value === null ? null : new \StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TaxRate::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
