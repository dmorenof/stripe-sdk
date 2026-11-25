<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Promotion;

/**
 * Promotion Code
 *
 * A Promotion Code represents a customer-redeemable code for an underlying promotion.
 * You can create multiple codes for a single promotion.
 *
 * If you enable promotion codes in your [customer portal configuration](https://docs.stripe.com/customer-management/configure-portal), then customers can redeem a code themselves when updating a subscription in the portal.
 * Customers can also view the currently active promotion codes and coupons on each of their subscriptions in the portal.
 */
final class Code extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active',
        'code',
        'created',
        'id',
        'livemode',
        'object_',
        'promotion',
        'restrictions',
        'times_redeemed',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'code' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the promotion code is currently active. A promotion code is only active if the coupon is also valid.
     */
    public bool $active;
    /**
     * The customer-facing code. Regardless of case, this code must be unique across all active promotion codes for each customer. Valid characters are lower case letters (a-z), upper case letters (A-Z), digits (0-9), and dashes (-).
     */
    public string $code {
        set {
            $this->assigning('code', $value);
            $this->code = $value;
        }
    }
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The customer who can use this promotion code.
     */
    public ?\StripeSDK\DTOs\Promotion\Code\CustomerDTO $customer;
    /**
     * The account representing the customer who can use this promotion code.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Date at which the promotion code can no longer be redeemed.
     * Format: unix-time
     */
    public ?int $expires_at;
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
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Maximum number of times this promotion code can be redeemed.
     */
    public ?int $max_redemptions;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Promotion\Code\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Promotion\Code\ObjectEnum $object_;
    public \StripeSDK\DTOs\Promotion\CodesResourcePromotion $promotion;
    public \StripeSDK\DTOs\Promotion\CodesResourceRestrictions $restrictions;
    /**
     * Number of times this promotion code has been used.
     */
    public int $times_redeemed;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'max_redemptions' => $value === null || is_int($value) ? $this->max_redemptions = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Promotion\Code\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'promotion' => $value instanceof \stdClass ? $this->promotion = new \StripeSDK\DTOs\Promotion\CodesResourcePromotion($value) : parent::assignMember($name, $value),
            'restrictions' => $value instanceof \stdClass ? $this->restrictions = new \StripeSDK\DTOs\Promotion\CodesResourceRestrictions($value) : parent::assignMember($name, $value),
            'times_redeemed' => is_int($value) ? $this->times_redeemed = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
