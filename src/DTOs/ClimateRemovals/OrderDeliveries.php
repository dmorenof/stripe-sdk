<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ClimateRemovals;

/**
 * Climate order delivery
 *
 * The delivery of a specified quantity of carbon for an order.
 */
final class OrderDeliveries extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'delivered_at',
        'metric_tons',
        'supplier',
    ];

    protected const array VALIDATION = [
        'metric_tons' => [
            'maxLength' => 5000,
        ],
        'registry_url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the delivery occurred. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $delivered_at;
    /**
     * Specific location of this delivery.
     */
    public ?\StripeSDK\DTOs\ClimateRemovals\Location $location;
    /**
     * Quantity of carbon removal supplied by this delivery.
     */
    public string $metric_tons {
        set {
            $this->assigning('metric_tons', $value);
            $this->metric_tons = $value;
        }
    }
    /**
     * Once retired, a URL to the registry entry for the tons from this delivery.
     */
    public ?string $registry_url {
        set {
            $this->assigning('registry_url', $value);
            $this->registry_url = $value;
        }
    }
    public \StripeSDK\DTOs\Climate\Supplier $supplier;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'delivered_at' => is_int($value) ? $this->delivered_at = $value : parent::assignMember($name, $value),
            'location' => $value === null || $value instanceof \stdClass ? $this->location = $value === null ? null : new \StripeSDK\DTOs\ClimateRemovals\Location($value) : parent::assignMember($name, $value),
            'metric_tons' => is_string($value) ? $this->metric_tons = $value : parent::assignMember($name, $value),
            'registry_url' => $value === null || is_string($value) ? $this->registry_url = $value : parent::assignMember($name, $value),
            'supplier' => $value instanceof \stdClass ? $this->supplier = new \StripeSDK\DTOs\Climate\Supplier($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
