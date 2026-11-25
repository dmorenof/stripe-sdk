<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * subscription_payment_method_options_billie_company_details_registered_address
 */
final class PaymentMethodOptionsBillieCompanyDetailsRegisteredAddress extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'city' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'line1' => [
            'maxLength' => 5000,
        ],
        'line2' => [
            'maxLength' => 5000,
        ],
        'postal_code' => [
            'maxLength' => 5000,
        ],
        'state' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * City, district, suburb, town, or village.
     */
    public ?string $city {
        set {
            $this->assigning('city', $value);
            $this->city = $value;
        }
    }
    /**
     * Two-letter country code.
     */
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Address line 1 (for example, street, PO Box, or company name).
     */
    public ?string $line1 {
        set {
            $this->assigning('line1', $value);
            $this->line1 = $value;
        }
    }
    /**
     * Address line 2 (for example, apartment, suite, unit, or building).
     */
    public ?string $line2 {
        set {
            $this->assigning('line2', $value);
            $this->line2 = $value;
        }
    }
    /**
     * ZIP or postal code.
     */
    public ?string $postal_code {
        set {
            $this->assigning('postal_code', $value);
            $this->postal_code = $value;
        }
    }
    /**
     * State, county, province, or region.
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
            'city' => $value === null || is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'line1' => $value === null || is_string($value) ? $this->line1 = $value : parent::assignMember($name, $value),
            'line2' => $value === null || is_string($value) ? $this->line2 = $value : parent::assignMember($name, $value),
            'postal_code' => $value === null || is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'state' => $value === null || is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
