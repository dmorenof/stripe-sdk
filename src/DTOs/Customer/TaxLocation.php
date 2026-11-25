<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerTaxLocation
 */
final class TaxLocation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'country',
        'source',
    ];

    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
        'state' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The identified tax country of the customer.
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * The data source used to infer the customer's location.
     */
    public \StripeSDK\Enums\Customer\TaxLocation\SourceEnum $source;
    /**
     * The identified tax state, county, province, or region of the customer.
     */
    public ?string $state {
        set {
            $this->assigning('state', $value);
            $this->state = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = \StripeSDK\Enums\Customer\TaxLocation\SourceEnum::from($value) : parent::assignMember($name, $value),
            'state' => $value === null || is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
