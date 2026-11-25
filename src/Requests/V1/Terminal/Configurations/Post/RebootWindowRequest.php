<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\Post;

/**
 * reboot_window
 *
 * Reboot time settings for readers. that support customized reboot time configuration.
 */
final class RebootWindowRequest extends \Dmorenof\SdkRuntime\DTO
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
