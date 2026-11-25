<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TestHelpers;

/**
 * Test Clock
 *
 * A test clock enables deterministic control over objects in testmode. With a test clock, you can create
 * objects at a frozen time in the past or future, and advance to a specific future time to observe webhooks and state changes. After the clock advances,
 * you can either validate the current state of your scenario (and test your assumptions), change the current state of your scenario (and test more complex scenarios), or keep advancing forward in time.
 */
final class TestClock extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'deletes_after',
        'frozen_time',
        'id',
        'livemode',
        'object_',
        'status',
        'status_details',
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
     * Time at which this clock is scheduled to auto delete.
     * Format: unix-time
     */
    public int $deletes_after;
    /**
     * Time at which all objects belonging to this clock are frozen.
     * Format: unix-time
     */
    public int $frozen_time;
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
     * The custom name supplied at creation.
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
    public \StripeSDK\Enums\TestHelpers\TestClock\ObjectEnum $object_;
    /**
     * The status of the Test Clock.
     */
    public \StripeSDK\Enums\TestHelpers\TestClock\StatusEnum $status;
    public \StripeSDK\DTOs\Billing\ClocksResourceStatusDetailsStatusDetails $status_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'deletes_after' => is_int($value) ? $this->deletes_after = $value : parent::assignMember($name, $value),
            'frozen_time' => is_int($value) ? $this->frozen_time = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\TestHelpers\TestClock\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\TestHelpers\TestClock\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_details' => $value instanceof \stdClass ? $this->status_details = new \StripeSDK\DTOs\Billing\ClocksResourceStatusDetailsStatusDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
