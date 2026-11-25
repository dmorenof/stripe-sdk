<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\Alerts\Post;

/**
 * usage_threshold_config
 *
 * The configuration of the usage threshold.
 */
final class UsageThresholdRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'gte',
        'meter',
        'recurrence',
    ];

    protected const array VALIDATION = [
        'meter' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Collections\V1\Billing\Alerts\Post\UsageThreshold\ThresholdFiltersCollection $filters;
    public int $gte;
    public string $meter {
        set {
            $this->assigning('meter', $value);
            $this->meter = $value;
        }
    }
    public \StripeSDK\Enums\V1\Billing\Alerts\Post\UsageThreshold\ThresholdRecurrenceEnum $recurrence;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'gte' => is_int($value) ? $this->gte = $value : parent::assignMember($name, $value),
            'meter' => is_string($value) ? $this->meter = $value : parent::assignMember($name, $value),
            'recurrence' => is_string($value) ? $this->recurrence = \StripeSDK\Enums\V1\Billing\Alerts\Post\UsageThreshold\ThresholdRecurrenceEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
