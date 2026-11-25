<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Entitlements\Features;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'lookup_key',
        'name',
    ];

    protected const array VALIDATION = [
        'lookup_key' => [
            'maxLength' => 80,
        ],
        'name' => [
            'maxLength' => 80,
        ],
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A unique key you provide as your own system identifier. This may be up to 80 characters.
     */
    public string $lookup_key {
        set {
            $this->assigning('lookup_key', $value);
            $this->lookup_key = $value;
        }
    }
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\Requests\V1\Entitlements\Features\Post\MetadataMapRequest $metadata;
    /**
     * The feature's name, for your own purpose, not meant to be displayable to the customer.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'lookup_key' => is_string($value) ? $this->lookup_key = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
