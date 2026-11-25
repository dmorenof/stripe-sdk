<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\CountrySpec;

/**
 * CountrySpecVerificationFieldDetails
 */
final class VerificationFieldDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'additional',
        'minimum',
    ];

    /**
     * Additional fields which are only required for some users.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $additional;
    /**
     * Fields which every account must eventually provide.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $minimum;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'additional' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->additional = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'minimum' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->minimum = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
