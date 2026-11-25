<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * Add Invoice Item
 *
 * An Add Invoice Item describes the prices and quantities that will be added as pending invoice items when entering a phase.
 */
final class ScheduleAddInvoiceItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'discounts',
        'period',
        'price',
    ];

    /**
     * Controls whether discounts apply to this invoice item. Defaults to true if no value is provided.
     */
    public ?bool $discountable;
    /**
     * The stackable discounts that will be applied to the item.
     */
    public \StripeSDK\Collections\Subscription\ScheduleAddInvoiceItem\DiscountsCollection $discounts;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Subscription\ScheduleAddInvoiceItem\MetadataMap $metadata;
    public \StripeSDK\DTOs\Subscription\ScheduleAddInvoiceItemPeriod $period;
    /**
     * ID of the price used to generate the invoice item.
     */
    public \StripeSDK\DTOs\Subscription\ScheduleAddInvoiceItem\PriceDTO $price;
    /**
     * The quantity of the invoice item.
     */
    public ?int $quantity;
    /**
     * The tax rates which apply to the item. When set, the `default_tax_rates` do not apply to this item.
     */
    public ?\StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'discountable' => $value === null || is_bool($value) ? $this->discountable = $value : parent::assignMember($name, $value),
            'discounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->discounts = new \StripeSDK\Collections\Subscription\ScheduleAddInvoiceItem\DiscountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\DiscountsResourceStackableDiscountWithDiscountEnd::class)) : parent::assignMember($name, $value),
            'period' => $value instanceof \stdClass ? $this->period = new \StripeSDK\DTOs\Subscription\ScheduleAddInvoiceItemPeriod($value) : parent::assignMember($name, $value),
            'quantity' => $value === null || is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'tax_rates' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->tax_rates = $value === null ? null : new \StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TaxRate::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
