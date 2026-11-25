<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Trial Setting
 *
 * Configures how this subscription behaves during the trial period.
 */
final class SubscriptionsTrialsResourceTrialSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end_behavior',
    ];

    public \StripeSDK\DTOs\SubscriptionsTrialsResourceEndBehavior $end_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end_behavior' => $value instanceof \stdClass ? $this->end_behavior = new \StripeSDK\DTOs\SubscriptionsTrialsResourceEndBehavior($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
