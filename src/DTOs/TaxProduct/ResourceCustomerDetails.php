<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceCustomerDetails
 */
final class ResourceCustomerDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'tax_ids',
        'taxability_override',
    ];

    protected const array VALIDATION = [
        'ip_address' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The customer's postal address (for example, home or business location).
     */
    public ?\StripeSDK\DTOs\TaxProduct\ResourcePostalAddress $address;
    /**
     * The type of customer address provided.
     */
    public ?\StripeSDK\Enums\TaxProduct\ResourceCustomerDetails\AddressSourceEnum $address_source;
    /**
     * The customer's IP address (IPv4 or IPv6).
     */
    public ?string $ip_address {
        set {
            $this->assigning('ip_address', $value);
            $this->ip_address = $value;
        }
    }
    /**
     * The customer's tax IDs (for example, EU VAT numbers).
     */
    public \StripeSDK\Collections\TaxProduct\ResourceCustomerDetails\TaxIdsCollection $tax_ids;
    /**
     * The taxability override used for taxation.
     */
    public \StripeSDK\Enums\TaxProduct\ResourceCustomerDetails\TaxabilityOverrideEnum $taxability_override;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value === null || $value instanceof \stdClass ? $this->address = $value === null ? null : new \StripeSDK\DTOs\TaxProduct\ResourcePostalAddress($value) : parent::assignMember($name, $value),
            'address_source' => $value === null || is_string($value) ? $this->address_source = $value === null ? null : \StripeSDK\Enums\TaxProduct\ResourceCustomerDetails\AddressSourceEnum::from($value) : parent::assignMember($name, $value),
            'ip_address' => $value === null || is_string($value) ? $this->ip_address = $value : parent::assignMember($name, $value),
            'tax_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tax_ids = new \StripeSDK\Collections\TaxProduct\ResourceCustomerDetails\TaxIdsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TaxProduct\ResourceCustomerDetailsResourceTaxId::class)) : parent::assignMember($name, $value),
            'taxability_override' => is_string($value) ? $this->taxability_override = \StripeSDK\Enums\TaxProduct\ResourceCustomerDetails\TaxabilityOverrideEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
