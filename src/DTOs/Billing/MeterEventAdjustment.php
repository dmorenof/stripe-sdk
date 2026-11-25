<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * Billing Meter Event Adjustment
 *
 * A billing meter event adjustment is a resource that allows you to cancel a meter event. For example, you might create a billing meter event adjustment to cancel a meter event that was created in error or attached to the wrong customer.
 */
final class MeterEventAdjustment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'event_name',
        'livemode',
        'object_',
        'status',
        'type',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'event_name' => [
            'maxLength' => 100,
        ],
    ];

    /**
     * Specifies which event to cancel.
     */
    public ?\StripeSDK\DTOs\Billing\MeterResourceBillingMeterEventAdjustmentCancel $cancel;
    /**
     * The name of the meter event. Corresponds with the `event_name` field on a meter.
     */
    public string $event_name {
        set {
            $this->assigning('event_name', $value);
            $this->event_name = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Billing\MeterEventAdjustment\ObjectEnum $object_;
    /**
     * The meter event adjustment's status.
     */
    public \StripeSDK\Enums\Billing\MeterEventAdjustment\StatusEnum $status;
    /**
     * Specifies whether to cancel a single event or a range of events for a time period. Time period cancellation is not supported yet.
     */
    public \StripeSDK\Enums\Billing\MeterEventAdjustment\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cancel' => $value === null || $value instanceof \stdClass ? $this->cancel = $value === null ? null : new \StripeSDK\DTOs\Billing\MeterResourceBillingMeterEventAdjustmentCancel($value) : parent::assignMember($name, $value),
            'event_name' => is_string($value) ? $this->event_name = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Billing\MeterEventAdjustment\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Billing\MeterEventAdjustment\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Billing\MeterEventAdjustment\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
