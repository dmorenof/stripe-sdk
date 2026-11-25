<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * customer_update_params
 *
 * Controls what fields on Customer can be updated by the Checkout Session. Can only be provided when `customer` is provided.
 */
final class CustomerUpdateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\CustomerUpdate\UpdateAddressEnum $address;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\CustomerUpdate\UpdateNameEnum $name;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\CustomerUpdate\UpdateShippingEnum $shipping;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = \StripeSDK\Enums\V1\Checkout\Sessions\Post\CustomerUpdate\UpdateAddressEnum::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = \StripeSDK\Enums\V1\Checkout\Sessions\Post\CustomerUpdate\UpdateNameEnum::from($value) : parent::assignMember($name, $value),
            'shipping' => is_string($value) ? $this->shipping = \StripeSDK\Enums\V1\Checkout\Sessions\Post\CustomerUpdate\UpdateShippingEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
