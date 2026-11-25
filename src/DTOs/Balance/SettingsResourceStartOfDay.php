<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance;

/**
 * BalanceSettingsResourceStartOfDay
 */
final class SettingsResourceStartOfDay extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'hour',
        'minutes',
        'timezone',
    ];

    protected const array VALIDATION = [
        'timezone' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Hour at which the customized start of day begins according to the given timezone. Must be a [supported customized start of day hour](/connect/customized-start-of-day#available-timezones-and-cutoffs).
     */
    public int $hour;
    /**
     * Minutes at which the customized start of day begins according to the given timezone. Must be either 0 or 30.
     */
    public int $minutes;
    /**
     * Timezone for the customized start of day. Must be a [supported customized start of day timezone](/connect/customized-start-of-day#available-timezones-and-cutoffs).
     */
    public string $timezone {
        set {
            $this->assigning('timezone', $value);
            $this->timezone = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hour' => is_int($value) ? $this->hour = $value : parent::assignMember($name, $value),
            'minutes' => is_int($value) ? $this->minutes = $value : parent::assignMember($name, $value),
            'timezone' => is_string($value) ? $this->timezone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
