<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Terminal;

/**
 * Location
 *
 * A Location represents a grouping of readers.
 *
 * Related guide: [Fleet management](https://docs.stripe.com/terminal/fleet/locations)
 */
final class Location extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
        'display_name',
        'id',
        'livemode',
        'metadata',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'configuration_overrides' => [
            'maxLength' => 5000,
        ],
        'display_name' => [
            'maxLength' => 5000,
        ],
        'display_name_kana' => [
            'maxLength' => 5000,
        ],
        'display_name_kanji' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\AddressApiResourceTerminal $address;
    public \StripeSDK\DTOs\LegalEntity\JapanAddress $address_kana;
    public \StripeSDK\DTOs\LegalEntity\JapanAddress $address_kanji;
    /**
     * The ID of a configuration that will be used to customize all readers in this location.
     */
    public string $configuration_overrides {
        set {
            $this->assigning('configuration_overrides', $value);
            $this->configuration_overrides = $value;
        }
    }
    /**
     * The display name of the location.
     */
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * The Kana variation of the display name of the location.
     */
    public string $display_name_kana {
        set {
            $this->assigning('display_name_kana', $value);
            $this->display_name_kana = $value;
        }
    }
    /**
     * The Kanji variation of the display name of the location.
     */
    public string $display_name_kanji {
        set {
            $this->assigning('display_name_kanji', $value);
            $this->display_name_kanji = $value;
        }
    }
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
    public \StripeSDK\DTOs\Terminal\Location\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Terminal\Location\ObjectEnum $object_;
    /**
     * The phone number of the location.
     */
    public string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value instanceof \stdClass ? $this->address = new \StripeSDK\DTOs\AddressApiResourceTerminal($value) : parent::assignMember($name, $value),
            'address_kana' => $value instanceof \stdClass ? $this->address_kana = new \StripeSDK\DTOs\LegalEntity\JapanAddress($value) : parent::assignMember($name, $value),
            'address_kanji' => $value instanceof \stdClass ? $this->address_kanji = new \StripeSDK\DTOs\LegalEntity\JapanAddress($value) : parent::assignMember($name, $value),
            'configuration_overrides' => is_string($value) ? $this->configuration_overrides = $value : parent::assignMember($name, $value),
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'display_name_kana' => is_string($value) ? $this->display_name_kana = $value : parent::assignMember($name, $value),
            'display_name_kanji' => is_string($value) ? $this->display_name_kanji = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Terminal\Location\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
