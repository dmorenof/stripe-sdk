<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * TerminalConfigurationConfigurationResourceRebootWindow
 */
final class TerminalConfigurationConfigurationResourceRebootWindow extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end_hour',
        'start_hour',
    ];

    /**
     * Integer between 0 to 23 that represents the end hour of the reboot time window. The value must be different than the start_hour.
     */
    public int $end_hour;
    /**
     * Integer between 0 to 23 that represents the start hour of the reboot time window.
     */
    public int $start_hour;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end_hour' => is_int($value) ? $this->end_hour = $value : parent::assignMember($name, $value),
            'start_hour' => is_int($value) ? $this->start_hour = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
