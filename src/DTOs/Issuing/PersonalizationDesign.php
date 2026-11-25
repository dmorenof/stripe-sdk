<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * Personalization Design
 *
 * A Personalization Design is a logical grouping of a Physical Bundle, card logo, and carrier text that represents a product line.
 */
final class PersonalizationDesign extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'metadata',
        'object_',
        'physical_bundle',
        'preferences',
        'rejection_reasons',
        'status',
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
        'lookup_key' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The file for the card logo to use with physical bundles that support card logos. Must have a `purpose` value of `issuing_logo`. Image must be in PNG format with dimensions of 1000px by 200px. It must be a binary (black and white) image containing a black logo on a white background. We don't accept grayscale.
     */
    public ?\StripeSDK\DTOs\Issuing\PersonalizationDesign\CardLogoDTO $card_logo;
    /**
     * Hash containing carrier text, for use with physical bundles that support carrier text.
     */
    public ?\StripeSDK\DTOs\Issuing\PersonalizationDesignCarrierText $carrier_text;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
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
     * A lookup key used to retrieve personalization designs dynamically from a static string. This may be up to 200 characters.
     */
    public ?string $lookup_key {
        set {
            $this->assigning('lookup_key', $value);
            $this->lookup_key = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Issuing\PersonalizationDesign\MetadataMap $metadata;
    /**
     * Friendly display name.
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
    public \StripeSDK\Enums\Issuing\PersonalizationDesign\ObjectEnum $object_;
    /**
     * The physical bundle object belonging to this personalization design.
     */
    public \StripeSDK\DTOs\Issuing\PersonalizationDesign\PhysicalBundleDTO $physical_bundle;
    public \StripeSDK\DTOs\Issuing\PersonalizationDesignPreferences $preferences;
    public \StripeSDK\DTOs\Issuing\PersonalizationDesignRejectionReasons $rejection_reasons;
    /**
     * Whether this personalization design can be used to create cards.
     */
    public \StripeSDK\Enums\Issuing\PersonalizationDesign\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'carrier_text' => $value === null || $value instanceof \stdClass ? $this->carrier_text = $value === null ? null : new \StripeSDK\DTOs\Issuing\PersonalizationDesignCarrierText($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'lookup_key' => $value === null || is_string($value) ? $this->lookup_key = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Issuing\PersonalizationDesign\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'preferences' => $value instanceof \stdClass ? $this->preferences = new \StripeSDK\DTOs\Issuing\PersonalizationDesignPreferences($value) : parent::assignMember($name, $value),
            'rejection_reasons' => $value instanceof \stdClass ? $this->rejection_reasons = new \StripeSDK\DTOs\Issuing\PersonalizationDesignRejectionReasons($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Issuing\PersonalizationDesign\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
