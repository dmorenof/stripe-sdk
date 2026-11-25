<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Fee
 */
final class Fee extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
        'type',
    ];

    protected const array VALIDATION = [
        'application' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount of the fee, in cents.
     */
    public int $amount;
    /**
     * ID of the Connect application that earned the fee.
     */
    public ?string $application {
        set {
            $this->assigning('application', $value);
            $this->application = $value;
        }
    }
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Type of the fee, one of: `application_fee`, `payment_method_passthrough_fee`, `stripe_fee`, `tax`, or `withheld_tax`.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'application' => $value === null || is_string($value) ? $this->application = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
