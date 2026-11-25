<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\Post;

/**
 * shared_tax_create_param
 *
 * Tax details about the customer.
 */
final class CustomersTaxRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Customers\Post\Tax\IpAddressRequest $ip_address;
    public \StripeSDK\Enums\V1\Customers\Post\Tax\ValidateLocationEnum $validate_location;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'validate_location' => is_string($value) ? $this->validate_location = \StripeSDK\Enums\V1\Customers\Post\Tax\ValidateLocationEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
