<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Terminal;

/**
 * Reader
 *
 * A Reader represents a physical device for accepting payment details.
 *
 * Related guide: [Connecting to a reader](https://docs.stripe.com/terminal/payments/connect-reader)
 */
final class Reader extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'device_type',
        'id',
        'label',
        'livemode',
        'metadata',
        'object_',
        'serial_number',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'device_sw_version' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'ip_address' => [
            'maxLength' => 5000,
        ],
        'label' => [
            'maxLength' => 5000,
        ],
        'serial_number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The most recent action performed by the reader.
     */
    public ?\StripeSDK\DTOs\TerminalReaderReaderResource\ReaderAction $action;
    /**
     * The current software version of the reader.
     */
    public ?string $device_sw_version {
        set {
            $this->assigning('device_sw_version', $value);
            $this->device_sw_version = $value;
        }
    }
    /**
     * Device type of the reader.
     */
    public \StripeSDK\Enums\Terminal\Reader\DeviceTypeEnum $device_type;
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
     * The local IP address of the reader.
     */
    public ?string $ip_address {
        set {
            $this->assigning('ip_address', $value);
            $this->ip_address = $value;
        }
    }
    /**
     * Custom label given to the reader for easier identification.
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }
    /**
     * The last time this reader reported to Stripe backend. Timestamp is measured in milliseconds since the Unix epoch. Unlike most other Stripe timestamp fields which use seconds, this field uses milliseconds.
     * Format: unix-time
     */
    public ?int $last_seen_at;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * The location identifier of the reader.
     */
    public ?\StripeSDK\DTOs\Terminal\Reader\LocationDTO $location;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Terminal\Reader\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Terminal\Reader\ObjectEnum $object_;
    /**
     * Serial number of the reader.
     */
    public string $serial_number {
        set {
            $this->assigning('serial_number', $value);
            $this->serial_number = $value;
        }
    }
    /**
     * The networking status of the reader. This value is `null` for mobile readers. We do not recommend using this field in flows that may block taking payments.
     */
    public ?\StripeSDK\Enums\Terminal\Reader\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => $value === null || $value instanceof \stdClass ? $this->action = $value === null ? null : new \StripeSDK\DTOs\TerminalReaderReaderResource\ReaderAction($value) : parent::assignMember($name, $value),
            'device_sw_version' => $value === null || is_string($value) ? $this->device_sw_version = $value : parent::assignMember($name, $value),
            'device_type' => is_string($value) ? $this->device_type = \StripeSDK\Enums\Terminal\Reader\DeviceTypeEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ip_address' => $value === null || is_string($value) ? $this->ip_address = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'last_seen_at' => $value === null || is_int($value) ? $this->last_seen_at = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Terminal\Reader\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'serial_number' => is_string($value) ? $this->serial_number = $value : parent::assignMember($name, $value),
            'status' => $value === null || is_string($value) ? $this->status = $value === null ? null : \StripeSDK\Enums\Terminal\Reader\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
