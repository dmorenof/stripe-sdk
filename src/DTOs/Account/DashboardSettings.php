<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountDashboardSettings
 */
final class DashboardSettings extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'display_name' => [
            'maxLength' => 5000,
        ],
        'timezone' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The display name for this account. This is used on the Stripe Dashboard to differentiate between accounts.
     */
    public ?string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * The timezone used in the Stripe Dashboard for this account. A list of possible time zone values is maintained at the [IANA Time Zone Database](http://www.iana.org/time-zones).
     */
    public ?string $timezone {
        set {
            $this->assigning('timezone', $value);
            $this->timezone = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display_name' => $value === null || is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'timezone' => $value === null || is_string($value) ? $this->timezone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
