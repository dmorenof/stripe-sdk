<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * Subscription Item
 *
 * Subscription items allow you to create customer subscriptions with more than
 * one plan, making it easy to represent complex billing relationships.
 */
final class Item extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'current_period_end',
        'current_period_start',
        'discounts',
        'id',
        'metadata',
        'object_',
        'price',
        'subscription',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'subscription' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The time period the subscription item has been billed for.
     * Format: unix-time
     */
    public int $billed_until;
    /**
     * Define thresholds at which an invoice will be sent, and the related subscription advanced to a new billing period
     */
    public ?\StripeSDK\DTOs\Subscription\ItemBillingThresholds $billing_thresholds;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     */
    public int $created;
    /**
     * The end time of this subscription item's current billing period.
     * Format: unix-time
     */
    public int $current_period_end;
    /**
     * The start time of this subscription item's current billing period.
     * Format: unix-time
     */
    public int $current_period_start;
    /**
     * The current trial that is applied to this subscription item.
     */
    public ?\StripeSDK\DTOs\SubscriptionsTrialsResourceCurrentTrial $current_trial;
    /**
     * The discounts applied to the subscription item. Subscription item discounts are applied before subscription discounts. Use `expand[]=discounts` to expand each discount.
     */
    public \StripeSDK\Collections\Subscription\Item\DiscountsCollection $discounts;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Subscription\Item\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Subscription\Item\ObjectEnum $object_;
    public \StripeSDK\DTOs\Price $price;
    /**
     * The [quantity](https://docs.stripe.com/subscriptions/quantities) of the plan to which the customer should be subscribed.
     */
    public int $quantity;
    /**
     * The `subscription` this `subscription_item` belongs to.
     */
    public string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }
    /**
     * The tax rates which apply to this `subscription_item`. When set, the `default_tax_rates` on the subscription do not apply to this `subscription_item`.
     */
    public ?\StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billed_until' => is_int($value) ? $this->billed_until = $value : parent::assignMember($name, $value),
            'billing_thresholds' => $value === null || $value instanceof \stdClass ? $this->billing_thresholds = $value === null ? null : new \StripeSDK\DTOs\Subscription\ItemBillingThresholds($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'current_period_end' => is_int($value) ? $this->current_period_end = $value : parent::assignMember($name, $value),
            'current_period_start' => is_int($value) ? $this->current_period_start = $value : parent::assignMember($name, $value),
            'current_trial' => $value === null || $value instanceof \stdClass ? $this->current_trial = $value === null ? null : new \StripeSDK\DTOs\SubscriptionsTrialsResourceCurrentTrial($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Subscription\Item\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \StripeSDK\DTOs\Price($value) : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            'tax_rates' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->tax_rates = $value === null ? null : new \StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TaxRate::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
