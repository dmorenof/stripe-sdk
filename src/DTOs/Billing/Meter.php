<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * Billing Meter
 *
 * Meters specify how to aggregate meter events over a billing period. Meter events represent the actions that customers take in your system. Meters attach to prices and form the basis of the bill.
 *
 * Related guide: [Usage based billing](https://docs.stripe.com/billing/subscriptions/usage-based)
 */
final class Meter extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'customer_mapping',
        'default_aggregation',
        'display_name',
        'event_name',
        'id',
        'livemode',
        'object_',
        'status',
        'status_transitions',
        'updated',
        'value_settings',
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
        'event_name' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    public \StripeSDK\DTOs\Billing\MeterResourceCustomerMappingSettings $customer_mapping;
    public \StripeSDK\DTOs\Billing\MeterResourceAggregationSettings $default_aggregation;
    /**
     * The meter's name.
     */
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * The name of the meter event to record usage for. Corresponds with the `event_name` field on meter events.
     */
    public string $event_name {
        set {
            $this->assigning('event_name', $value);
            $this->event_name = $value;
        }
    }
    /**
     * The time window which meter events have been pre-aggregated for, if any.
     */
    public ?\StripeSDK\Enums\Billing\Meter\TimeWindowEnum $event_time_window;
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
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Billing\Meter\ObjectEnum $object_;
    /**
     * The meter's status.
     */
    public \StripeSDK\Enums\Billing\Meter\StatusEnum $status;
    public \StripeSDK\DTOs\Billing\MeterResourceBillingMeterStatusTransitions $status_transitions;
    /**
     * Time at which the object was last updated. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $updated;
    public \StripeSDK\DTOs\Billing\MeterResourceBillingMeterValue $value_settings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'customer_mapping' => $value instanceof \stdClass ? $this->customer_mapping = new \StripeSDK\DTOs\Billing\MeterResourceCustomerMappingSettings($value) : parent::assignMember($name, $value),
            'default_aggregation' => $value instanceof \stdClass ? $this->default_aggregation = new \StripeSDK\DTOs\Billing\MeterResourceAggregationSettings($value) : parent::assignMember($name, $value),
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'event_name' => is_string($value) ? $this->event_name = $value : parent::assignMember($name, $value),
            'event_time_window' => $value === null || is_string($value) ? $this->event_time_window = $value === null ? null : \StripeSDK\Enums\Billing\Meter\TimeWindowEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Billing\Meter\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Billing\Meter\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_transitions' => $value instanceof \stdClass ? $this->status_transitions = new \StripeSDK\DTOs\Billing\MeterResourceBillingMeterStatusTransitions($value) : parent::assignMember($name, $value),
            'updated' => is_int($value) ? $this->updated = $value : parent::assignMember($name, $value),
            'value_settings' => $value instanceof \stdClass ? $this->value_settings = new \StripeSDK\DTOs\Billing\MeterResourceBillingMeterValue($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
