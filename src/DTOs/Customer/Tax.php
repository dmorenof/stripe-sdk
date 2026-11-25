<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerTax
 */
final class Tax extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'automatic_tax',
        'provider',
    ];

    protected const array VALIDATION = [
        'ip_address' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Surfaces if automatic tax computation is possible given the current customer location information.
     */
    public \StripeSDK\Enums\Customer\Tax\AutomaticTaxEnum $automatic_tax;
    /**
     * A recent IP address of the customer used for tax reporting and tax location inference.
     */
    public ?string $ip_address {
        set {
            $this->assigning('ip_address', $value);
            $this->ip_address = $value;
        }
    }
    /**
     * The identified tax location of the customer.
     */
    public ?\StripeSDK\DTOs\Customer\TaxLocation $location;
    /**
     * The tax calculation provider used for location resolution. Defaults to `stripe` when not using a [third-party provider](/tax/third-party-apps).
     */
    public \StripeSDK\Enums\Customer\Tax\ProviderEnum $provider;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'automatic_tax' => is_string($value) ? $this->automatic_tax = \StripeSDK\Enums\Customer\Tax\AutomaticTaxEnum::from($value) : parent::assignMember($name, $value),
            'ip_address' => $value === null || is_string($value) ? $this->ip_address = $value : parent::assignMember($name, $value),
            'location' => $value === null || $value instanceof \stdClass ? $this->location = $value === null ? null : new \StripeSDK\DTOs\Customer\TaxLocation($value) : parent::assignMember($name, $value),
            'provider' => is_string($value) ? $this->provider = \StripeSDK\Enums\Customer\Tax\ProviderEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
