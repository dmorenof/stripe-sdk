<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountCapabilityFutureRequirements
 */
final class CapabilityFutureRequirements extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currently_due',
        'errors',
        'eventually_due',
        'past_due',
        'pending_verification',
    ];

    /**
     * Fields that are due and can be resolved by providing the corresponding alternative fields instead. Multiple alternatives can reference the same `original_fields_due`. When this happens, any of these alternatives can serve as a pathway for attempting to resolve the fields. Additionally, providing `original_fields_due` again also serves as a pathway for attempting to resolve the fields.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\AlternativesCollection $alternatives;
    /**
     * Date on which `future_requirements` becomes the main `requirements` hash and `future_requirements` becomes empty. After the transition, `currently_due` requirements may immediately become `past_due`, but the account may also be given a grace period depending on the capability's enablement state prior to transitioning.
     * Format: unix-time
     */
    public ?int $current_deadline;
    /**
     * Fields that need to be resolved to keep the capability enabled. If not resolved by `future_requirements[current_deadline]`, these fields will transition to the main `requirements` hash.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $currently_due;
    /**
     * This is typed as an enum for consistency with `requirements.disabled_reason`, but it safe to assume `future_requirements.disabled_reason` is null because fields in `future_requirements` will never disable the account.
     */
    public ?\StripeSDK\Enums\Account\CapabilityFutureRequirements\DisabledReasonEnum $disabled_reason;
    /**
     * Fields that are `currently_due` and need to be collected again because validation or verification failed.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\ErrorsCollection $errors;
    /**
     * Fields you must collect when all thresholds are reached. As they become required, they appear in `currently_due` as well.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $eventually_due;
    /**
     * Fields that haven't been resolved by `requirements.current_deadline`. These fields need to be resolved to enable the capability on the account. `future_requirements.past_due` is a subset of `requirements.past_due`.
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
            'current_deadline' => $value === null || is_int($value) ? $this->current_deadline = $value : parent::assignMember($name, $value),
            'currently_due' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->currently_due = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'disabled_reason' => $value === null || is_string($value) ? $this->disabled_reason = $value === null ? null : \StripeSDK\Enums\Account\CapabilityFutureRequirements\DisabledReasonEnum::from($value) : parent::assignMember($name, $value),
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Account\RequirementsError::class)) : parent::assignMember($name, $value),
            'eventually_due' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->eventually_due = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'past_due' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->past_due = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'pending_verification' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->pending_verification = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
