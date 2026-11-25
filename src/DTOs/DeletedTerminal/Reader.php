<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\DeletedTerminal;

/**
 * TerminalReaderDeletedReader
 */
final class Reader extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'deleted',
        'device_type',
        'id',
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
        'deleted' => [
            'jsonSchema' => '{"enum":[true]}',
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'serial_number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Always true for a deleted object
     */
    public bool $deleted {
        set {
            $this->assigning('deleted', $value);
            $this->deleted = $value;
        }
    }
    /**
     * Device type of the reader.
     */
    public \StripeSDK\Enums\DeletedTerminal\Reader\DeviceTypeEnum $device_type;
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
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\DeletedTerminal\Reader\ObjectEnum $object_;
    /**
     * Serial number of the reader.
     */
    public string $serial_number {
        set {
            $this->assigning('serial_number', $value);
            $this->serial_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deleted' => is_bool($value) ? $this->deleted = $value : parent::assignMember($name, $value),
            'device_type' => is_string($value) ? $this->device_type = \StripeSDK\Enums\DeletedTerminal\Reader\DeviceTypeEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\DeletedTerminal\Reader\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'serial_number' => is_string($value) ? $this->serial_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
