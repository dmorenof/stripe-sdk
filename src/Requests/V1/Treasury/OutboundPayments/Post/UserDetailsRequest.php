<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\OutboundPayments\Post;

/**
 * end_user_details_params
 *
 * End user details.
 */
final class UserDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'present',
    ];

    public string $ip_address;
    public bool $present;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ip_address' => is_string($value) ? $this->ip_address = $value : parent::assignMember($name, $value),
            'present' => is_bool($value) ? $this->present = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
