<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionItems;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'subscription',
    ];

    protected const array VALIDATION = [
        'price' => [
            'maxLength' => 5000,
        ],
        'subscription' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Define thresholds at which an invoice will be sent, and the subscription advanced to a new billing period. Pass an empty string to remove previously-defined thresholds.
     */
    public \StripeSDK\Requests\V1\SubscriptionItems\Post\BillingThresholdsRequest $billing_thresholds;
    /**
     * The trial offer to apply to this subscription item.
     */
    public \StripeSDK\Requests\V1\SubscriptionItems\Post\CurrentTrialRequest $current_trial;
    /**
     * The coupons to redeem into discounts for the subscription item.
     */
    public \StripeSDK\Requests\V1\SubscriptionItems\Post\SubscriptionItemsDiscountsRequest $discounts;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\SubscriptionItems\Post\MetadataMapRequest $metadata;
    /**
     * Controls how Stripe handles payment when a subscription update requires payment and `collection_method=charge_automatically`.
     */
    public \StripeSDK\Enums\V1\SubscriptionItems\Post\PaymentBehaviorEnum $payment_behavior;
    /**
     * The ID of the price object.
     */
    public string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }
    /**
     * Data used to generate a new [Price](https://docs.stripe.com/api/prices) object inline.
     */
    public \StripeSDK\Requests\V1\SubscriptionItems\Post\PriceDataRequest $price_data;
    /**
     * Determines how to handle [prorations](https://docs.stripe.com/billing/subscriptions/prorations) when the billing cycle changes (e.g., when switching plans, resetting `billing_cycle_anchor=now`, or starting a trial), or if an item's `quantity` changes. The default value is `create_prorations`.
     */
    public \StripeSDK\Enums\V1\SubscriptionItems\Post\ProrationBehaviorEnum $proration_behavior;
    /**
     * If set, the proration will be calculated as though the subscription was updated at the given time. This can be used to apply the same proration that was previewed with the [upcoming invoice](/api/invoices/create_preview) endpoint.
     * Format: unix-time
     */
    public int $proration_date;
    /**
     * The quantity you'd like to apply to the subscription item you're creating.
     */
    public int $quantity;
    /**
     * The identifier of the subscription to modify.
     */
    public string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }
    /**
     * A list of [Tax Rate](https://docs.stripe.com/api/tax_rates) ids. These Tax Rates will override the [`default_tax_rates`](https://docs.stripe.com/api/subscriptions/create#create_subscription-default_tax_rates) on the Subscription. When updating, pass an empty string to remove previously-defined tax rates.
     */
    public \StripeSDK\Requests\V1\SubscriptionItems\Post\TaxRatesRequest $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'payment_behavior' => is_string($value) ? $this->payment_behavior = \StripeSDK\Enums\V1\SubscriptionItems\Post\PaymentBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'price' => is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\V1\SubscriptionItems\Post\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'proration_date' => is_int($value) ? $this->proration_date = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
