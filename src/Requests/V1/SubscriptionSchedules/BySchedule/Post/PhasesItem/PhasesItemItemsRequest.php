<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem;

/**
 * configuration_item_params
 */
final class PhasesItemItemsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'price' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem\ItemsItem\BillingThresholdsRequest $billing_thresholds;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem\ItemsItem\ItemsItemDiscountsRequest $discounts;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem\ItemsItem\MetadataMapRequest $metadata;
    public string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }
    public \StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem\ItemsItem\PriceDataRequest $price_data;
    public int $quantity;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem\ItemsItem\TaxRatesRequest $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'price' => is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
