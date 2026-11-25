<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post\CollectedInformation;

/**
 * shipping_details_params
 */
final class ShippingDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
        'name',
    ];

    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 255,
        ],
    ];

    public \StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post\CollectedInformation\ShippingDetails\DetailsAddressRequest $address;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
