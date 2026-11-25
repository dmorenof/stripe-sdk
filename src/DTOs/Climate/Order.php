<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Climate;

/**
 * Climate order
 *
 * Orders represent your intent to purchase a particular Climate product. When you create an order, the
 * payment is deducted from your merchant balance.
 */
final class Order extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_fees',
        'amount_subtotal',
        'amount_total',
        'created',
        'currency',
        'delivery_details',
        'expected_delivery_year',
        'id',
        'livemode',
        'metadata',
        'metric_tons',
        'object_',
        'product',
        'status',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'certificate' => [
            'maxLength' => 5000,
        ],
        'currency' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Total amount of [Frontier](https://frontierclimate.com/)'s service fees in the currency's smallest unit.
     */
    public int $amount_fees;
    /**
     * Total amount of the carbon removal in the currency's smallest unit.
     */
    public int $amount_subtotal;
    /**
     * Total amount of the order including fees in the currency's smallest unit.
     */
    public int $amount_total;
    public \StripeSDK\DTOs\ClimateRemovals\Beneficiary $beneficiary;
    /**
     * Time at which the order was canceled. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $canceled_at;
    /**
     * Reason for the cancellation of this order.
     */
    public ?\StripeSDK\Enums\Climate\Order\CancellationReasonEnum $cancellation_reason;
    /**
     * For delivered orders, a URL to a delivery certificate for the order.
     */
    public ?string $certificate {
        set {
            $this->assigning('certificate', $value);
            $this->certificate = $value;
        }
    }
    /**
     * Time at which the order was confirmed. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $confirmed_at;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase, representing the currency for this order.
     */
    public string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
    /**
     * Time at which the order's expected_delivery_year was delayed. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $delayed_at;
    /**
     * Time at which the order was delivered. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $delivered_at;
    /**
     * Details about the delivery of carbon removal for this order.
     */
    public \StripeSDK\Collections\Climate\Order\DeliveryDetailsCollection $delivery_details;
    /**
     * The year this order is expected to be delivered. If the year is in the past, the order is a spot purchase and will be delivered within 30 days of purchase.
     */
    public int $expected_delivery_year;
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
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Climate\Order\MetadataMap $metadata;
    /**
     * Quantity of carbon removal that is included in this order.
     * Format: decimal
     */
    public string $metric_tons;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Climate\Order\ObjectEnum $object_;
    /**
     * Unique ID for the Climate `Product` this order is purchasing.
     */
    public \StripeSDK\DTOs\Climate\Order\ProductDTO $product;
    /**
     * Time at which the order's product was substituted for a different product. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $product_substituted_at;
    /**
     * The current status of this order.
     */
    public \StripeSDK\Enums\Climate\Order\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_fees' => is_int($value) ? $this->amount_fees = $value : parent::assignMember($name, $value),
            'amount_subtotal' => is_int($value) ? $this->amount_subtotal = $value : parent::assignMember($name, $value),
            'amount_total' => is_int($value) ? $this->amount_total = $value : parent::assignMember($name, $value),
            'beneficiary' => $value instanceof \stdClass ? $this->beneficiary = new \StripeSDK\DTOs\ClimateRemovals\Beneficiary($value) : parent::assignMember($name, $value),
            'canceled_at' => $value === null || is_int($value) ? $this->canceled_at = $value : parent::assignMember($name, $value),
            'cancellation_reason' => $value === null || is_string($value) ? $this->cancellation_reason = $value === null ? null : \StripeSDK\Enums\Climate\Order\CancellationReasonEnum::from($value) : parent::assignMember($name, $value),
            'certificate' => $value === null || is_string($value) ? $this->certificate = $value : parent::assignMember($name, $value),
            'confirmed_at' => $value === null || is_int($value) ? $this->confirmed_at = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'delayed_at' => $value === null || is_int($value) ? $this->delayed_at = $value : parent::assignMember($name, $value),
            'delivered_at' => $value === null || is_int($value) ? $this->delivered_at = $value : parent::assignMember($name, $value),
            'delivery_details' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->delivery_details = new \StripeSDK\Collections\Climate\Order\DeliveryDetailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\ClimateRemovals\OrderDeliveries::class)) : parent::assignMember($name, $value),
            'expected_delivery_year' => is_int($value) ? $this->expected_delivery_year = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'metric_tons' => is_string($value) ? $this->metric_tons = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Climate\Order\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'product_substituted_at' => $value === null || is_int($value) ? $this->product_substituted_at = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Climate\Order\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
