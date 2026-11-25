<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * start_of_day
 */
final class DayVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'timezone' => [
            'maxLength' => 5000,
        ],
    ];

    public int $hour;
    public int $minutes;
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
