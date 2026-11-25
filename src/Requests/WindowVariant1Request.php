<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * reboot_window
 */
final class WindowVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end_hour',
        'start_hour',
    ];

    public int $end_hour;
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
