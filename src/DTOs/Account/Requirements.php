<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountRequirements
 */
final class Requirements extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Fields that are due and can be resolved by providing the corresponding alternative fields instead. Many alternatives can list the same `original_fields_due`, and any of these alternatives can serve as a pathway for attempting to resolve the fields again. Re-providing `original_fields_due` also serves as a pathway for attempting to resolve the fields again.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\AlternativesCollection $alternatives;
    /**
     * Date by which the fields in `currently_due` must be collected to keep the account enabled. These fields may disable the account sooner if the next threshold is reached before they are collected.
     * Format: unix-time
     */
    public ?int $current_deadline;
    /**
     * Fields that need to be resolved to keep the account enabled. If not resolved by `current_deadline`, these fields will appear in `past_due` as well, and the account will be disabled.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $currently_due;
    /**
     * If the account is disabled, this enum describes why. [Learn more about handling verification issues](https://docs.stripe.com/connect/handling-api-verification).
     */
    public ?\StripeSDK\Enums\Account\Requirements\DisabledReasonEnum $disabled_reason;
    /**
     * Fields that are `currently_due` and need to be collected again because validation or verification failed.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\ErrorsCollection $errors;
    /**
     * Fields you must collect when all thresholds are reached. As they become required, they appear in `currently_due` as well, and `current_deadline` becomes set.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $eventually_due;
    /**
     * Fields that haven't been resolved by `current_deadline`. These fields need to be resolved to enable the account.
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
            'disabled_reason' => $value === null || is_string($value) ? $this->disabled_reason = $value === null ? null : \StripeSDK\Enums\Account\Requirements\DisabledReasonEnum::from($value) : parent::assignMember($name, $value),
            'errors' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->errors = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Account\RequirementsError::class)) : parent::assignMember($name, $value),
            'eventually_due' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->eventually_due = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'past_due' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->past_due = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'pending_verification' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->pending_verification = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
