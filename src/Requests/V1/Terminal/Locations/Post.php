<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Locations;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'configuration_overrides' => [
            'maxLength' => 500,
        ],
        'display_name' => [
            'maxLength' => 1000,
        ],
        'display_name_kana' => [
            'maxLength' => 1000,
        ],
        'display_name_kanji' => [
            'maxLength' => 1000,
        ],
    ];

    /**
     * The full address of the location.
     */
    public \StripeSDK\Requests\V1\Terminal\Locations\Post\LocationsAddressRequest $address;
    /**
     * The Kana variation of the full address of the location (Japan only).
     */
    public \StripeSDK\Requests\V1\Terminal\Locations\Post\AddressKanaRequest $address_kana;
    /**
     * The Kanji variation of the full address of the location (Japan only).
     */
    public \StripeSDK\Requests\V1\Terminal\Locations\Post\AddressKanjiRequest $address_kanji;
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
     * A name for the location. Maximum length is 1000 characters.
     */
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * The Kana variation of the name for the location (Japan only). Maximum length is 1000 characters.
     */
    public string $display_name_kana {
        set {
            $this->assigning('display_name_kana', $value);
            $this->display_name_kana = $value;
        }
    }
    /**
     * The Kanji variation of the name for the location (Japan only). Maximum length is 1000 characters.
     */
    public string $display_name_kanji {
        set {
            $this->assigning('display_name_kanji', $value);
            $this->display_name_kanji = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Terminal\Locations\Post\LocationsMetadataRequest $metadata;
    /**
     * The phone number for the location.
     */
    public string $phone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'configuration_overrides' => is_string($value) ? $this->configuration_overrides = $value : parent::assignMember($name, $value),
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'display_name_kana' => is_string($value) ? $this->display_name_kana = $value : parent::assignMember($name, $value),
            'display_name_kanji' => is_string($value) ? $this->display_name_kanji = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
