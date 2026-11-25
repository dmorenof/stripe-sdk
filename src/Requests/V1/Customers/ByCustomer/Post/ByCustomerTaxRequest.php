<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Post;

/**
 * shared_tax_update_param
 *
 * Tax details about the customer.
 */
final class ByCustomerTaxRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Post\Tax\IpAddressRequest $ip_address;
    public \StripeSDK\Enums\V1\Customers\ByCustomer\Post\Tax\ValidateLocationEnum $validate_location;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'validate_location' => is_string($value) ? $this->validate_location = \StripeSDK\Enums\V1\Customers\ByCustomer\Post\Tax\ValidateLocationEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
