<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\PersonalizationDesigns;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'physical_bundle',
    ];

    protected const array VALIDATION = [
        'lookup_key' => [
            'maxLength' => 200,
        ],
        'name' => [
            'maxLength' => 200,
        ],
        'physical_bundle' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The file for the card logo, for use with physical bundles that support card logos. Must have a `purpose` value of `issuing_logo`.
     */
    public string $card_logo;
    /**
     * Hash containing carrier text, for use with physical bundles that support carrier text.
     */
    public \StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\Post\CarrierTextRequest $carrier_text;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A lookup key used to retrieve personalization designs dynamically from a static string. This may be up to 200 characters.
     */
    public string $lookup_key {
        set {
            $this->assigning('lookup_key', $value);
            $this->lookup_key = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\Post\MetadataMapRequest $metadata;
    /**
     * Friendly display name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The physical bundle object belonging to this personalization design.
     */
    public string $physical_bundle {
        set {
            $this->assigning('physical_bundle', $value);
            $this->physical_bundle = $value;
        }
    }
    /**
     * Information on whether this personalization design is used to create cards when one is not specified.
     */
    public \StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\Post\PersonalizationDesignsPreferencesRequest $preferences;
    /**
     * If set to true, will atomically remove the lookup key from the existing personalization design, and assign it to this personalization design.
     */
    public bool $transfer_lookup_key;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card_logo' => is_string($value) ? $this->card_logo = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'lookup_key' => is_string($value) ? $this->lookup_key = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'physical_bundle' => is_string($value) ? $this->physical_bundle = $value : parent::assignMember($name, $value),
            'transfer_lookup_key' => is_bool($value) ? $this->transfer_lookup_key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
