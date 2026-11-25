<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ShippingDetailsRequestVariant1;

/**
 * recipient_shipping_with_optional_fields_address
 */
final class DetailsVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
        'name',
    ];

    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\ShippingDetailsRequestVariant1\ShippingDetailsRequestVariant1AddressRequest $address;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \StripeSDK\Requests\ShippingDetailsRequestVariant1\ShippingDetailsRequestVariant1PhoneRequest $phone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
