<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourcePauseSchedulePause
 */
final class SchedulesResourcePauseSchedulePause extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'pause_at',
        'status',
    ];

    /**
     * Time at which the subscription pauses.
     * Format: unix-time
     */
    public int $pause_at;
    /**
     * Settings controlling billing behavior during the pause.
     */
    public ?\StripeSDK\DTOs\Subscription\SchedulesResourcePauseSchedulePauseSettings $settings;
    public \StripeSDK\DTOs\Subscription\SchedulesResourcePauseSchedulePauseStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pause_at' => is_int($value) ? $this->pause_at = $value : parent::assignMember($name, $value),
            'settings' => $value === null || $value instanceof \stdClass ? $this->settings = $value === null ? null : new \StripeSDK\DTOs\Subscription\SchedulesResourcePauseSchedulePauseSettings($value) : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \StripeSDK\DTOs\Subscription\SchedulesResourcePauseSchedulePauseStatus($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
