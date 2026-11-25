<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * User Intervention Resolved
 *
 * User Intervention Resolved Event details attached to this payment evaluation
 */
final class UserInterventionResolved extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'key',
    ];

    protected const array VALIDATION = [
        'key' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Unique ID of this intervention. Use this to provide the result.
     */
    public string $key {
        set {
            $this->assigning('key', $value);
            $this->key = $value;
        }
    }
    /**
     * Result of the intervention if it has been completed.
     */
    public ?\StripeSDK\Enums\InsightsResourcesPaymentEvaluation\UserInterventionResolved\OutcomeEnum $outcome;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'outcome' => $value === null || is_string($value) ? $this->outcome = $value === null ? null : \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\UserInterventionResolved\OutcomeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
