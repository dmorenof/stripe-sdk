<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Climate;

/**
 * Climate supplier
 *
 * A supplier of carbon removal.
 */
final class Supplier extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'info_url',
        'livemode',
        'locations',
        'name',
        'object_',
        'removal_pathway',
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
        'info_url' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
    ];

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
     * Link to a webpage to learn more about the supplier.
     */
    public string $info_url {
        set {
            $this->assigning('info_url', $value);
            $this->info_url = $value;
        }
    }
    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     */
    public bool $livemode;
    /**
     * The locations in which this supplier operates.
     */
    public \StripeSDK\Collections\Climate\Supplier\LocationsCollection $locations;
    /**
     * Name of this carbon removal supplier.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * String representing the object’s type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Climate\Supplier\ObjectEnum $object_;
    /**
     * The scientific pathway used for carbon removal.
     */
    public \StripeSDK\Enums\Climate\Supplier\RemovalPathwayEnum $removal_pathway;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'info_url' => is_string($value) ? $this->info_url = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'locations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->locations = new \StripeSDK\Collections\Climate\Supplier\LocationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\ClimateRemovals\Location::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Climate\Supplier\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'removal_pathway' => is_string($value) ? $this->removal_pathway = \StripeSDK\Enums\Climate\Supplier\RemovalPathwayEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
