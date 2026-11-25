<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountRequirementsAlternative
 */
final class RequirementsAlternative extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'alternative_fields_due',
        'original_fields_due',
    ];

    /**
     * Fields that can be provided to resolve all fields in `original_fields_due`.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $alternative_fields_due;
    /**
     * Fields that are due and can be resolved by providing all fields in `alternative_fields_due`.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $original_fields_due;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'alternative_fields_due' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->alternative_fields_due = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'original_fields_due' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->original_fields_due = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
