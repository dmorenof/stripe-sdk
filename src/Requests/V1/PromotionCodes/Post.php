<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PromotionCodes;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'promotion',
    ];

    protected const array VALIDATION = [
        'code' => [
            'maxLength' => 500,
        ],
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the promotion code is currently active.
     */
    public bool $active;
    /**
     * The customer-facing code. Regardless of case, this code must be unique across all active promotion codes for a specific customer. Valid characters are lower case letters (a-z), upper case letters (A-Z), digits (0-9), and dashes (-).
     *
     * If left blank, we will generate one automatically.
     */
    public string $code {
        set {
            $this->assigning('code', $value);
            $this->code = $value;
        }
    }
    /**
     * The customer who can use this promotion code. If not set, all customers can use the promotion code.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * The account representing the customer who can use this promotion code. If not set, all customers can use the promotion code.
     */
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The timestamp at which this promotion code will expire. If the coupon has specified a `redeems_by`, then this value cannot be after the coupon's `redeems_by`.
     * Format: unix-time
     */
    public int $expires_at;
    /**
     * A positive integer specifying the number of times the promotion code can be redeemed. If the coupon has specified a `max_redemptions`, then this value cannot be greater than the coupon's `max_redemptions`.
     */
    public int $max_redemptions;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\PromotionCodes\Post\MetadataMapRequest $metadata;
    /**
     * The promotion referenced by this promotion code.
     */
    public \StripeSDK\Requests\V1\PromotionCodes\Post\PromotionCodesPromotionRequest $promotion;
    /**
     * Settings that restrict the redemption of the promotion code.
     */
    public \StripeSDK\Requests\V1\PromotionCodes\Post\PromotionCodesRestrictionsRequest $restrictions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'max_redemptions' => is_int($value) ? $this->max_redemptions = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
