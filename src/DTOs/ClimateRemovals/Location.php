<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ClimateRemovals;

/**
 * ClimateRemovalsLocation
 */
final class Location extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'country',
    ];

    protected const array VALIDATION = [
        'city' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'region' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The city where the supplier is located.
     */
    public ?string $city {
        set {
            $this->assigning('city', $value);
            $this->city = $value;
        }
    }
    /**
     * Two-letter ISO code representing the country where the supplier is located.
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * The geographic latitude where the supplier is located.
     */
    public ?float $latitude;
    /**
     * The geographic longitude where the supplier is located.
     */
    public ?float $longitude;
    /**
     * The state/county/province/region where the supplier is located.
     */
    public ?string $region {
        set {
            $this->assigning('region', $value);
            $this->region = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'city' => $value === null || is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'latitude' => $value === null || is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'longitude' => $value === null || is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            'region' => $value === null || is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
