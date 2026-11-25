<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * Trial Setting
 *
 * Configures how this subscription behaves during the trial period.
 */
final class TrialSettingsTrialSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end_behavior',
    ];

    public \StripeSDK\DTOs\SubscriptionsResource\TrialSettingsEndBehavior $end_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end_behavior' => $value instanceof \stdClass ? $this->end_behavior = new \StripeSDK\DTOs\SubscriptionsResource\TrialSettingsEndBehavior($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
