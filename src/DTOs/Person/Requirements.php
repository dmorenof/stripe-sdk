<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Person;

/**
 * PersonRequirements
 */
final class Requirements extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currently_due',
        'errors',
        'eventually_due',
        'past_due',
        'pending_verification',
    ];

    /**
     * Fields that are due and can be resolved by providing the corresponding alternative fields instead. Many alternatives can list the same `original_fields_due`, and any of these alternatives can serve as a pathway for attempting to resolve the fields again. Re-providing `original_fields_due` also serves as a pathway for attempting to resolve the fields again.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\AlternativesCollection $alternatives;
    /**
     * Fields that need to be resolved to keep the person's account enabled. If not resolved by the account's `current_deadline`, these fields will appear in `past_due` as well, and the account is disabled.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $currently_due;
    /**
     * Fields that are `currently_due` and need to be collected again because validation or verification failed.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\ErrorsCollection $errors;
    /**
     * Fields you must collect when all thresholds are reached. As they become required, they appear in `currently_due` as well, and the account's `current_deadline` becomes set.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $eventually_due;
    /**
     * Fields that haven't been resolved by `current_deadline`. These fields need to be resolved to enable the person's account.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $past_due;
    /**
     * Fields that are being reviewed, or might become required depending on the results of a review. If the review fails, these fields can move to `eventually_due`, `currently_due`, `past_due` or `alternatives`. Fields might appear in `eventually_due`, `currently_due`, `past_due` or `alternatives` and in `pending_verification` if one verification fails but another is still pending.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $pending_verification;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'alternatives' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->alternatives = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\AlternativesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Account\RequirementsAlternative::class)) : parent::assignMember($name, $value),
            'currently_due' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->currently_due = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Account\RequirementsError::class)) : parent::assignMember($name, $value),
            'eventually_due' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->eventually_due = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'past_due' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->past_due = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'pending_verification' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->pending_verification = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
