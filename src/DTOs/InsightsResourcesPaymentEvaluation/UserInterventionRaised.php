<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * User Intervention Raised
 *
 * User intervention raised event details attached to this payment evaluation
 */
final class UserInterventionRaised extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'key',
        'type',
    ];

    protected const array VALIDATION = [
        'key' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\UserInterventionRaisedCustom $custom;
    /**
     * Unique identifier for the user intervention event.
     */
    public string $key {
        set {
            $this->assigning('key', $value);
            $this->key = $value;
        }
    }
    /**
     * Type of user intervention raised.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\UserInterventionRaised\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom' => $value instanceof \stdClass ? $this->custom = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\UserInterventionRaisedCustom($value) : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\UserInterventionRaised\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
