<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Sources\BySource\Post\Mandate\Acceptance;

/**
 * mandate_online_acceptance_params
 */
final class AcceptanceOnlineRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'user_agent' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Format: unix-time
     */
    public int $date;
    public string $ip;
    public string $user_agent {
        set {
            $this->assigning('user_agent', $value);
            $this->user_agent = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_int($value) ? $this->date = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'user_agent' => is_string($value) ? $this->user_agent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
