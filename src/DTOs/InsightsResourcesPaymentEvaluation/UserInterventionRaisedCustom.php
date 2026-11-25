<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * User Intervention Raised Custom
 *
 * User intervention raised custom event details attached to this payment evaluation
 */
final class UserInterventionRaisedCustom extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Custom type of user intervention raised. The string must use a snake case description for the type of intervention performed.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
