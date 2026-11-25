<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Calculations\Post\ShipFromDetails;

/**
 * merchant_postal_address
 */
final class DetailsAddressRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'country',
    ];

    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Tax\Calculations\Post\ShipFromDetails\Address\AddressCityRequest $city;
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    public \StripeSDK\Requests\V1\Tax\Calculations\Post\ShipFromDetails\Address\AddressLine1Request $line1;
    public \StripeSDK\Requests\V1\Tax\Calculations\Post\ShipFromDetails\Address\AddressLine2Request $line2;
    public \StripeSDK\Requests\V1\Tax\Calculations\Post\ShipFromDetails\Address\PostalCodeRequest $postal_code;
    public \StripeSDK\Requests\V1\Tax\Calculations\Post\ShipFromDetails\Address\AddressStateRequest $state;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
