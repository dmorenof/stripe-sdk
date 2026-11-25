<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Climate;

/**
 * Climate product
 *
 * A Climate product represents a type of carbon removal unit available for reservation.
 * You can retrieve it to see the current price and availability.
 */
final class Product extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'current_prices_per_metric_ton',
        'id',
        'livemode',
        'metric_tons_available',
        'name',
        'object_',
        'suppliers',
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
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Current prices for a metric ton of carbon removal in a currency's smallest unit.
     */
    public \StripeSDK\DTOs\Climate\Product\MetricTonMap $current_prices_per_metric_ton;
    /**
     * The year in which the carbon removal is expected to be delivered. If the year is in the past, this represents spot inventory with guaranteed delivery.
     */
    public ?int $delivery_year;
    /**
     * Unique identifier for the object. For convenience, Climate product IDs are human-readable strings
     * that start with `climsku_`. See [carbon removal inventory](https://stripe.com/docs/climate/orders/carbon-removal-inventory)
     * for a list of available carbon removal products.
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
     * The quantity of metric tons available for reservation.
     * Format: decimal
     */
    public string $metric_tons_available;
    /**
     * The Climate product's name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Climate\Product\ObjectEnum $object_;
    /**
     * The carbon removal suppliers that fulfill orders for this Climate product.
     */
    public \StripeSDK\Collections\Climate\Product\SuppliersCollection $suppliers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'delivery_year' => $value === null || is_int($value) ? $this->delivery_year = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'metric_tons_available' => is_string($value) ? $this->metric_tons_available = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Climate\Product\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'suppliers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->suppliers = new \StripeSDK\Collections\Climate\Product\SuppliersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Climate\Supplier::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
