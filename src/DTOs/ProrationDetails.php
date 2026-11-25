<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * ProrationDetails
 */
final class ProrationDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'discount_amounts',
    ];

    /**
     * For a credit proration, links to the debit invoice line items or invoice item that the credit applies to.
     */
    public ?\StripeSDK\DTOs\Invoice\ItemProrationCreditedItems $credited_items;
    /**
     * Discount amounts applied when the proration was created. This field is only populated for prorations created from subscriptions with `billing_mode=flexible`.
     */
    public \StripeSDK\Collections\Credit\Note\DiscountAmountsCollection $discount_amounts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'credited_items' => $value === null || $value instanceof \stdClass ? $this->credited_items = $value === null ? null : new \StripeSDK\DTOs\Invoice\ItemProrationCreditedItems($value) : parent::assignMember($name, $value),
            'discount_amounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->discount_amounts = new \StripeSDK\Collections\Credit\Note\DiscountAmountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\DiscountsResourceDiscountAmount::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
