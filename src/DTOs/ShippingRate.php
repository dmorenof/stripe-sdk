<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Shipping Rate
 *
 * Shipping rates describe the price of shipping presented to your customers and
 * applied to a purchase. For more information, see [Charge for shipping](https://docs.stripe.com/payments/during-payment/charge-shipping).
 */
final class ShippingRate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active',
        'created',
        'id',
        'livemode',
        'metadata',
        'object_',
        'type',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'display_name' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the shipping rate can be used for new purchases. Defaults to `true`.
     */
    public bool $active;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The estimated range for how long shipping will take, meant to be displayable to the customer. This will appear on CheckoutSessions.
     */
    public ?\StripeSDK\DTOs\ShippingRate\DeliveryEstimate $delivery_estimate;
    /**
     * The name of the shipping rate, meant to be displayable to the customer. This will appear on CheckoutSessions.
     */
    public ?string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    public \StripeSDK\DTOs\ShippingRate\FixedAmount $fixed_amount;
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
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\ShippingRate\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\ShippingRate\ObjectEnum $object_;
    /**
     * Specifies whether the rate is considered inclusive of taxes or exclusive of taxes. One of `inclusive`, `exclusive`, or `unspecified`.
     */
    public ?\StripeSDK\Enums\ShippingRate\TaxBehaviorEnum $tax_behavior;
    /**
     * A [tax code](https://docs.stripe.com/tax/tax-categories) ID. The Shipping tax code is `txcd_92010001`.
     */
    public ?\StripeSDK\DTOs\ShippingRate\TaxCodeDTO $tax_code;
    /**
     * The type of calculation to use on the shipping rate.
     */
    public \StripeSDK\Enums\ShippingRate\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'delivery_estimate' => $value === null || $value instanceof \stdClass ? $this->delivery_estimate = $value === null ? null : new \StripeSDK\DTOs\ShippingRate\DeliveryEstimate($value) : parent::assignMember($name, $value),
            'display_name' => $value === null || is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'fixed_amount' => $value instanceof \stdClass ? $this->fixed_amount = new \StripeSDK\DTOs\ShippingRate\FixedAmount($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\ShippingRate\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'tax_behavior' => $value === null || is_string($value) ? $this->tax_behavior = $value === null ? null : \StripeSDK\Enums\ShippingRate\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ShippingRate\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
