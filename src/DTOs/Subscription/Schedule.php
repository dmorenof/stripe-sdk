<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * Subscription Schedule
 *
 * A subscription schedule allows you to create and manage the lifecycle of a subscription by predefining expected changes.
 *
 * Related guide: [Subscription schedules](https://docs.stripe.com/billing/subscriptions/subscription-schedules)
 */
final class Schedule extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'billing_mode',
        'created',
        'customer',
        'default_settings',
        'end_behavior',
        'id',
        'livemode',
        'object_',
        'phases',
        'status',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'released_subscription' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * ID of the Connect Application that created the schedule.
     */
    public ?\StripeSDK\DTOs\Subscription\Schedule\ApplicationDTO $application;
    public \StripeSDK\DTOs\SubscriptionsResource\BillingMode $billing_mode;
    /**
     * Time at which the subscription schedule was canceled. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $canceled_at;
    /**
     * Time at which the subscription schedule was completed. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $completed_at;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Object representing the start and end dates for the current phase of the subscription schedule, if it is `active`.
     */
    public ?\StripeSDK\DTOs\Subscription\ScheduleCurrentPhase $current_phase;
    /**
     * ID of the customer who owns the subscription schedule.
     */
    public \StripeSDK\DTOs\Subscription\Schedule\CustomerDTO $customer;
    /**
     * ID of the account who owns the subscription schedule.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    public \StripeSDK\DTOs\Subscription\SchedulesResourceDefaultSettings $default_settings;
    /**
     * Behavior of the subscription schedule and underlying subscription when it ends. Possible values are `release` or `cancel` with the default being `release`. `release` will end the subscription schedule and keep the underlying subscription running. `cancel` will end the subscription schedule and cancel the underlying subscription.
     */
    public \StripeSDK\Enums\Subscription\Schedule\EndBehaviorEnum $end_behavior;
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
    public ?\StripeSDK\DTOs\Subscription\Schedule\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Subscription\Schedule\ObjectEnum $object_;
    /**
     * The pause schedules for this subscription schedule.
     */
    public \StripeSDK\Collections\Subscription\Schedule\PauseSchedulesCollection $pause_schedules;
    /**
     * Configuration for the subscription schedule's phases.
     */
    public \StripeSDK\Collections\Subscription\Schedule\PhasesCollection $phases;
    /**
     * Time at which the subscription schedule was released. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $released_at;
    /**
     * ID of the subscription once managed by the subscription schedule (if it is released).
     */
    public ?string $released_subscription {
        set {
            $this->assigning('released_subscription', $value);
            $this->released_subscription = $value;
        }
    }
    /**
     * The present status of the subscription schedule. Possible values are `not_started`, `active`, `completed`, `released`, and `canceled`. You can read more about the different states in our [behavior guide](https://docs.stripe.com/billing/subscriptions/subscription-schedules).
     */
    public \StripeSDK\Enums\Subscription\Schedule\StatusEnum $status;
    /**
     * ID of the subscription managed by the subscription schedule.
     */
    public ?\StripeSDK\DTOs\Subscription\Schedule\SubscriptionDTO $subscription;
    /**
     * ID of the test clock this subscription schedule belongs to.
     */
    public ?\StripeSDK\DTOs\Subscription\Schedule\TestClockDTO $test_clock;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_mode' => $value instanceof \stdClass ? $this->billing_mode = new \StripeSDK\DTOs\SubscriptionsResource\BillingMode($value) : parent::assignMember($name, $value),
            'canceled_at' => $value === null || is_int($value) ? $this->canceled_at = $value : parent::assignMember($name, $value),
            'completed_at' => $value === null || is_int($value) ? $this->completed_at = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'current_phase' => $value === null || $value instanceof \stdClass ? $this->current_phase = $value === null ? null : new \StripeSDK\DTOs\Subscription\ScheduleCurrentPhase($value) : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'default_settings' => $value instanceof \stdClass ? $this->default_settings = new \StripeSDK\DTOs\Subscription\SchedulesResourceDefaultSettings($value) : parent::assignMember($name, $value),
            'end_behavior' => is_string($value) ? $this->end_behavior = \StripeSDK\Enums\Subscription\Schedule\EndBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Subscription\Schedule\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'pause_schedules' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->pause_schedules = new \StripeSDK\Collections\Subscription\Schedule\PauseSchedulesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Subscription\SchedulesResourcePauseSchedule::class)) : parent::assignMember($name, $value),
            'phases' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->phases = new \StripeSDK\Collections\Subscription\Schedule\PhasesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Subscription\SchedulePhaseConfiguration::class)) : parent::assignMember($name, $value),
            'released_at' => $value === null || is_int($value) ? $this->released_at = $value : parent::assignMember($name, $value),
            'released_subscription' => $value === null || is_string($value) ? $this->released_subscription = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Subscription\Schedule\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
