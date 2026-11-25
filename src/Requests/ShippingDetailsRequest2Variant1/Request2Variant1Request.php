<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ShippingDetailsRequest2Variant1;

/**
 * shipping_details
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\ShippingDetailsRequest2Variant1\ShippingDetailsRequest2Variant1AddressRequest $address;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public string $phone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
