<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Coupons;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 40,
        ],
    ];

    /**
     * A positive integer representing the amount to subtract from an invoice total (required if `percent_off` is not passed).
     */
    public int $amount_off;
    /**
     * A hash containing directions for what this Coupon will apply discounts to.
     */
    public \StripeSDK\Requests\V1\Coupons\Post\AppliesToRequest $applies_to;
    /**
     * Three-letter [ISO code for the currency](https://stripe.com/docs/currencies) of the `amount_off` parameter (required if `amount_off` is passed).
     * Format: currency
     */
    public string $currency;
    /**
     * Coupons defined in each available currency option (only supported if `amount_off` is passed). Each key must be a three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html) and a [supported currency](https://stripe.com/docs/currencies).
     */
    public \StripeSDK\Requests\V1\Coupons\Post\OptionsMapRequest $currency_options;
    /**
     * Specifies how long the discount will be in effect if used on a subscription. Defaults to `once`.
     */
    public \StripeSDK\Enums\V1\Coupons\Post\CouponsDurationEnum $duration;
    /**
     * Required only if `duration` is `repeating`, in which case it must be a positive integer that specifies the number of months the discount will be in effect.
     */
    public int $duration_in_months;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Unique string of your choice that will be used to identify this coupon when applying it to a customer. If you don't want to specify a particular code, you can leave the ID blank and we'll generate a random code for you.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * A positive integer specifying the number of times the coupon can be redeemed before it's no longer valid. For example, you might have a 50% off coupon that the first 20 readers of your blog can use.
     */
    public int $max_redemptions;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Coupons\Post\CouponsMetadataRequest $metadata;
    /**
     * Name of the coupon displayed to customers on, for instance invoices, or receipts. By default the `id` is shown if `name` is not set.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * A positive float larger than 0, and smaller or equal to 100, that represents the discount the coupon will apply (required if `amount_off` is not passed).
     */
    public float $percent_off;
    /**
     * Unix timestamp specifying the last time at which the coupon can be redeemed (cannot be set to more than 5 years in the future). After the redeem_by date, the coupon can no longer be applied to new customers.
     * Format: unix-time
     */
    public int $redeem_by;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_off' => is_int($value) ? $this->amount_off = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'duration' => is_string($value) ? $this->duration = \StripeSDK\Enums\V1\Coupons\Post\CouponsDurationEnum::from($value) : parent::assignMember($name, $value),
            'duration_in_months' => is_int($value) ? $this->duration_in_months = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'max_redemptions' => is_int($value) ? $this->max_redemptions = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'percent_off' => is_float($value) ? $this->percent_off = $value : parent::assignMember($name, $value),
            'redeem_by' => is_int($value) ? $this->redeem_by = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
