<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountFutureRequirements
 */
final class FutureRequirements extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Fields that are due and can be resolved by providing the corresponding alternative fields instead. Many alternatives can list the same `original_fields_due`, and any of these alternatives can serve as a pathway for attempting to resolve the fields again. Re-providing `original_fields_due` also serves as a pathway for attempting to resolve the fields again.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\AlternativesCollection $alternatives;
    /**
     * Date on which `future_requirements` becomes the main `requirements` hash and `future_requirements` becomes empty. After the transition, `currently_due` requirements may immediately become `past_due`, but the account may also be given a grace period depending on its enablement state prior to transitioning.
     * Format: unix-time
     */
    public ?int $current_deadline;
    /**
     * Fields that need to be resolved to keep the account enabled. If not resolved by `future_requirements[current_deadline]`, these fields will transition to the main `requirements` hash.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $currently_due;
    /**
     * This is typed as an enum for consistency with `requirements.disabled_reason`.
     */
    public ?\StripeSDK\Enums\Account\FutureRequirements\DisabledReasonEnum $disabled_reason;
    /**
     * Fields that are `currently_due` and need to be collected again because validation or verification failed.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\ErrorsCollection $errors;
    /**
     * Fields you must collect when all thresholds are reached. As they become required, they appear in `currently_due` as well.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $eventually_due;
    /**
     * Fields that haven't been resolved by `requirements.current_deadline`. These fields need to be resolved to enable the capability on the account. `future_requirements.past_due` is a subset of `requirements.past_due`.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $past_due;
    /**
     * Fields that are being reviewed, or might become required depending on the results of a review. If the review fails, these fields can move to `eventually_due`, `currently_due`, `past_due` or `alternatives`. Fields might appear in `eventually_due`, `currently_due`, `past_due` or `alternatives` and in `pending_verification` if one verification fails but another is still pending.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $pending_verification;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'alternatives' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->alternatives = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\AlternativesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Account\RequirementsAlternative::class)) : parent::assignMember($name, $value),
            'current_deadline' => $value === null || is_int($value) ? $this->current_deadline = $value : parent::assignMember($name, $value),
            'currently_due' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->currently_due = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'disabled_reason' => $value === null || is_string($value) ? $this->disabled_reason = $value === null ? null : \StripeSDK\Enums\Account\FutureRequirements\DisabledReasonEnum::from($value) : parent::assignMember($name, $value),
            'errors' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->errors = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Account\RequirementsError::class)) : parent::assignMember($name, $value),
            'eventually_due' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->eventually_due = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'past_due' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->past_due = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'pending_verification' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->pending_verification = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
