<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cards\ByCard\Post;

/**
 * shipping_specs
 *
 * Updated shipping information for the card.
 */
final class ByCardShippingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
        'name',
    ];

    protected const array VALIDATION = [
        'business_name' => [
            'maxLength' => 50,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Issuing\Cards\ByCard\Post\Shipping\ShippingAddressRequest $address;
    public \StripeSDK\Requests\V1\Issuing\Cards\ByCard\Post\Shipping\AddressValidationRequest $address_validation;
    public string $business_name {
        set {
            $this->assigning('business_name', $value);
            $this->business_name = $value;
        }
    }
    public \StripeSDK\Requests\V1\Issuing\Cards\ByCard\Post\Shipping\ShippingCustomsRequest $customs;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public string $phone_number;
    public bool $require_signature;
    public \StripeSDK\Enums\V1\Issuing\Cards\ByCard\Post\Shipping\ShippingServiceEnum $service;
    public \StripeSDK\Enums\V1\Issuing\Cards\ByCard\Post\Shipping\ShippingTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'business_name' => is_string($value) ? $this->business_name = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone_number' => is_string($value) ? $this->phone_number = $value : parent::assignMember($name, $value),
            'require_signature' => is_bool($value) ? $this->require_signature = $value : parent::assignMember($name, $value),
            'service' => is_string($value) ? $this->service = \StripeSDK\Enums\V1\Issuing\Cards\ByCard\Post\Shipping\ShippingServiceEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Issuing\Cards\ByCard\Post\Shipping\ShippingTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
