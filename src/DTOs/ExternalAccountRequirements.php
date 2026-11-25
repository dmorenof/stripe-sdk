<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * ExternalAccountRequirements
 */
final class ExternalAccountRequirements extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Fields that need to be resolved to keep the external account enabled. If not resolved by `current_deadline`, these fields will appear in `past_due` as well, and the account is disabled.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $currently_due;
    /**
     * Fields that are `currently_due` and need to be collected again because validation or verification failed.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\ErrorsCollection $errors;
    /**
     * Fields that haven't been resolved by `current_deadline`. These fields need to be resolved to enable the external account.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $past_due;
    /**
     * Fields that are being reviewed, or might become required depending on the results of a review. If the review fails, these fields can move to `eventually_due`, `currently_due`, `past_due` or `alternatives`. Fields might appear in `eventually_due`, `currently_due`, `past_due` or `alternatives` and in `pending_verification` if one verification fails but another is still pending.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $pending_verification;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currently_due' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->currently_due = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'errors' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->errors = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Account\RequirementsError::class)) : parent::assignMember($name, $value),
            'past_due' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->past_due = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'pending_verification' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->pending_verification = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
