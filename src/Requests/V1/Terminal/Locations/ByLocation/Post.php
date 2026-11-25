<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Locations\ByLocation;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The full address of the location. You can't change the location's `country`. If you need to modify the `country` field, create a new `Location` object and re-register any existing readers to that location.
     */
    public \StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Post\ByLocationAddressRequest $address;
    /**
     * The Kana variation of the full address of the location (Japan only).
     */
    public \StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Post\AddressKanaRequest $address_kana;
    /**
     * The Kanji variation of the full address of the location (Japan only).
     */
    public \StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Post\AddressKanjiRequest $address_kanji;
    /**
     * The ID of a configuration that will be used to customize all readers in this location.
     */
    public \StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Post\ConfigurationOverridesRequest $configuration_overrides;
    /**
     * A name for the location.
     */
    public \StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Post\DisplayNameRequest $display_name;
    /**
     * The Kana variation of the name for the location (Japan only).
     */
    public \StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Post\NameKanaRequest $display_name_kana;
    /**
     * The Kanji variation of the name for the location (Japan only).
     */
    public \StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Post\NameKanjiRequest $display_name_kanji;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Post\ByLocationMetadataRequest $metadata;
    /**
     * The phone number for the location.
     */
    public \StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Post\ByLocationPhoneRequest $phone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
