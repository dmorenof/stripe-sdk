<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Coupon
 *
 * A coupon contains information about a percent-off or amount-off discount you
 * might want to apply to a customer. Coupons may be applied to [subscriptions](https://docs.stripe.com/api#subscriptions), [invoices](https://docs.stripe.com/api#invoices),
 * [checkout sessions](https://docs.stripe.com/api/checkout/sessions), [quotes](https://docs.stripe.com/api#quotes), and more. Coupons do not work with conventional one-off [charges](/api/charges/create) or [payment intents](https://docs.stripe.com/api/payment_intents).
 */
final class Coupon extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'duration',
        'id',
        'livemode',
        'object_',
        'times_redeemed',
        'valid',
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
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount (in the `currency` specified) that will be taken off the subtotal of any invoices for this customer.
     */
    public ?int $amount_off;
    public \StripeSDK\DTOs\CouponAppliesTo $applies_to;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * If `amount_off` has been set, the three-letter [ISO code for the currency](https://stripe.com/docs/currencies) of the amount to take off.
     * Format: currency
     */
    public ?string $currency;
    /**
     * Coupons defined in each available currency option. Each key must be a three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html) and a [supported currency](https://stripe.com/docs/currencies).
     */
    public \StripeSDK\DTOs\Coupon\CurrencyOptionsMap $currency_options;
    /**
     * One of `forever`, `once`, or `repeating`. Describes how long a customer who applies this coupon will get the discount.
     */
    public \StripeSDK\Enums\Coupon\DurationEnum $duration;
    /**
     * If `duration` is `repeating`, the number of months the coupon applies. Null if coupon `duration` is `forever` or `once`.
     */
    public ?int $duration_in_months;
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
     * Maximum number of times this coupon can be redeemed, in total, across all customers, before it is no longer valid.
     */
    public ?int $max_redemptions;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Coupon\MetadataMap $metadata;
    /**
     * Name of the coupon displayed to customers on for instance invoices or receipts.
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Coupon\ObjectEnum $object_;
    /**
     * Percent that will be taken off the subtotal of any invoices for this customer for the duration of the coupon. For example, a coupon with percent_off of 50 will make a $ (or local equivalent)100 invoice $ (or local equivalent)50 instead.
     */
    public ?float $percent_off;
    /**
     * Date after which the coupon can no longer be redeemed.
     * Format: unix-time
     */
    public ?int $redeem_by;
    /**
     * Number of times this coupon has been applied to a customer.
     */
    public int $times_redeemed;
    /**
     * Taking account of the above properties, whether this coupon can still be applied to a customer.
     */
    public bool $valid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_off' => $value === null || is_int($value) ? $this->amount_off = $value : parent::assignMember($name, $value),
            'applies_to' => $value instanceof \stdClass ? $this->applies_to = new \StripeSDK\DTOs\CouponAppliesTo($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'duration' => is_string($value) ? $this->duration = \StripeSDK\Enums\Coupon\DurationEnum::from($value) : parent::assignMember($name, $value),
            'duration_in_months' => $value === null || is_int($value) ? $this->duration_in_months = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'max_redemptions' => $value === null || is_int($value) ? $this->max_redemptions = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Coupon\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'percent_off' => $value === null || is_float($value) ? $this->percent_off = $value : parent::assignMember($name, $value),
            'redeem_by' => $value === null || is_int($value) ? $this->redeem_by = $value : parent::assignMember($name, $value),
            'times_redeemed' => is_int($value) ? $this->times_redeemed = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
