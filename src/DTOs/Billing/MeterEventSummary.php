<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * Billing Meter Event Summary
 *
 * A billing meter event summary represents an aggregated view of a customer's billing meter events within a specified timeframe. It indicates how much
 * usage was accrued by a customer for that period.
 *
 * Note: Meters events are aggregated asynchronously so the meter event summaries provide an eventually consistent view of the reported usage.
 */
final class MeterEventSummary extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'aggregated_value',
        'end_time',
        'id',
        'livemode',
        'meter',
        'object_',
        'start_time',
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
        'meter' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Aggregated value of all the events within `start_time` (inclusive) and `end_time` (inclusive). The aggregation strategy is defined on meter via `default_aggregation`.
     */
    public float $aggregated_value;
    /**
     * End timestamp for this event summary (exclusive). Must be aligned with minute boundaries.
     * Format: unix-time
     */
    public int $end_time;
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
     * The meter associated with this event summary.
     */
    public string $meter {
        set {
            $this->assigning('meter', $value);
            $this->meter = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Billing\MeterEventSummary\ObjectEnum $object_;
    /**
     * Start timestamp for this event summary (inclusive). Must be aligned with minute boundaries.
     * Format: unix-time
     */
    public int $start_time;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'aggregated_value' => is_float($value) ? $this->aggregated_value = $value : parent::assignMember($name, $value),
            'end_time' => is_int($value) ? $this->end_time = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'meter' => is_string($value) ? $this->meter = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Billing\MeterEventSummary\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'start_time' => is_int($value) ? $this->start_time = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
