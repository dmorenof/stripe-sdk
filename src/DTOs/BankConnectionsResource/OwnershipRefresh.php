<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BankConnectionsResource;

/**
 * BankConnectionsResourceOwnershipRefresh
 */
final class OwnershipRefresh extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'last_attempted_at',
        'status',
    ];

    /**
     * The time at which the last refresh attempt was initiated. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $last_attempted_at;
    /**
     * Time at which the next ownership refresh can be initiated. This value will be `null` when `status` is `pending`. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $next_refresh_available_at;
    /**
     * The status of the last refresh attempt.
     */
    public \StripeSDK\Enums\BankConnectionsResource\OwnershipRefresh\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'last_attempted_at' => is_int($value) ? $this->last_attempted_at = $value : parent::assignMember($name, $value),
            'next_refresh_available_at' => $value === null || is_int($value) ? $this->next_refresh_available_at = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\BankConnectionsResource\OwnershipRefresh\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
