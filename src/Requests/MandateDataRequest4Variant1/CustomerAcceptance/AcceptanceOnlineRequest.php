<?php

declare(strict_types=1);

namespace StripeSDK\Requests\MandateDataRequest4Variant1\CustomerAcceptance;

/**
 * online_param
 */
final class AcceptanceOnlineRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ip_address',
        'user_agent',
    ];

    protected const array VALIDATION = [
        'user_agent' => [
            'maxLength' => 5000,
        ],
    ];

    public string $ip_address;
    public string $user_agent {
        set {
            $this->assigning('user_agent', $value);
            $this->user_agent = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ip_address' => is_string($value) ? $this->ip_address = $value : parent::assignMember($name, $value),
            'user_agent' => is_string($value) ? $this->user_agent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
