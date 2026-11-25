<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post;

/**
 * subscription_item_update_params
 */
final class BySubscriptionExposedIdItemsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'price' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post\ItemsItem\BillingThresholdsRequest $billing_thresholds;
    public bool $clear_usage;
    public \StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post\ItemsItem\CurrentTrialRequest $current_trial;
    public bool $deleted;
    public \StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post\ItemsItem\ItemsItemDiscountsRequest $discounts;
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post\ItemsItem\ItemsItemMetadataRequest $metadata;
    public string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }
    public \StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post\ItemsItem\PriceDataRequest $price_data;
    public int $quantity;
    public \StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post\ItemsItem\TaxRatesRequest $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'clear_usage' => is_bool($value) ? $this->clear_usage = $value : parent::assignMember($name, $value),
            'deleted' => is_bool($value) ? $this->deleted = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'price' => is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
