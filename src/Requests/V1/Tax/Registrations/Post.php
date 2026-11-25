<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Registrations;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active_from',
        'country',
        'country_options',
    ];

    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the Tax Registration becomes active. It can be either `now` to indicate the current time, or a future timestamp measured in seconds since the Unix epoch.
     */
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\ActiveFromRequest $active_from;
    /**
     * Two-letter country code ([ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)).
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Specific options for a registration in the specified `country`.
     */
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptionsRequest $country_options;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * If set, the Tax Registration stops being active at this time. If not set, the Tax Registration will be active indefinitely. Timestamp measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $expires_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
