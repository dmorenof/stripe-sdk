<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Calculations\Post;

/**
 * customer_details
 *
 * Details about the customer, including address and tax IDs.
 */
final class CustomerDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Tax\Calculations\Post\CustomerDetails\DetailsAddressRequest $address;
    public \StripeSDK\Enums\V1\Tax\Calculations\Post\CustomerDetails\AddressSourceEnum $address_source;
    public string $ip_address;
    public \StripeSDK\Collections\V1\Tax\Calculations\Post\CustomerDetails\TaxIdsCollection $tax_ids;
    public \StripeSDK\Enums\V1\Tax\Calculations\Post\CustomerDetails\TaxabilityOverrideEnum $taxability_override;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_source' => is_string($value) ? $this->address_source = \StripeSDK\Enums\V1\Tax\Calculations\Post\CustomerDetails\AddressSourceEnum::from($value) : parent::assignMember($name, $value),
            'ip_address' => is_string($value) ? $this->ip_address = $value : parent::assignMember($name, $value),
            'taxability_override' => is_string($value) ? $this->taxability_override = \StripeSDK\Enums\V1\Tax\Calculations\Post\CustomerDetails\TaxabilityOverrideEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
