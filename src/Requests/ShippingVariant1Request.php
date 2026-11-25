<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * customer_shipping
 */
final class ShippingVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
        'name',
    ];

    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\CustomersShippingRequestVariant1\CustomersShippingRequestVariant1AddressRequest $address;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
