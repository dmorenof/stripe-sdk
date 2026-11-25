<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\ByPersonalizationDesign;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'physical_bundle' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The file for the card logo, for use with physical bundles that support card logos. Must have a `purpose` value of `issuing_logo`.
     */
    public \StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Post\CardLogoRequest $card_logo;
    /**
     * Hash containing carrier text, for use with physical bundles that support carrier text.
     */
    public \StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Post\CarrierTextRequest $carrier_text;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A lookup key used to retrieve personalization designs dynamically from a static string. This may be up to 200 characters.
     */
    public \StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Post\LookupKeyRequest $lookup_key;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Post\MetadataMapRequest $metadata;
    /**
     * Friendly display name. Providing an empty string will set the field to null.
     */
    public \StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Post\ByPersonalizationDesignNameRequest $name;
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
    public \StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Post\ByPersonalizationDesignPreferencesRequest $preferences;
    /**
     * If set to true, will atomically remove the lookup key from the existing personalization design, and assign it to this personalization design.
     */
    public bool $transfer_lookup_key;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'physical_bundle' => is_string($value) ? $this->physical_bundle = $value : parent::assignMember($name, $value),
            'transfer_lookup_key' => is_bool($value) ? $this->transfer_lookup_key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
