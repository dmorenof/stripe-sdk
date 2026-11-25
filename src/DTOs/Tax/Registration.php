<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Tax;

/**
 * Tax Registration
 *
 * A Tax `Registration` lets us know that your business is registered to collect tax on payments within a region, enabling you to [automatically collect tax](https://docs.stripe.com/tax).
 *
 * Stripe doesn't register on your behalf with the relevant authorities when you create a Tax `Registration` object. For more information on how to register to collect tax, see [our guide](https://docs.stripe.com/tax/registering).
 *
 * Related guide: [Using the Registrations API](https://docs.stripe.com/tax/registrations-api)
 */
final class Registration extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active_from',
        'country',
        'country_options',
        'created',
        'id',
        'livemode',
        'object_',
        'status',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the registration becomes active. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $active_from;
    /**
     * Two-letter country code ([ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)).
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptions $country_options;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * If set, the registration stops being active at this time. If not set, the registration will be active indefinitely. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $expires_at;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Tax\Registration\ObjectEnum $object_;
    /**
     * The status of the registration. This field is present for convenience and can be deduced from `active_from` and `expires_at`.
     */
    public \StripeSDK\Enums\Tax\Registration\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active_from' => is_int($value) ? $this->active_from = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'country_options' => $value instanceof \stdClass ? $this->country_options = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptions($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Tax\Registration\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Tax\Registration\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
