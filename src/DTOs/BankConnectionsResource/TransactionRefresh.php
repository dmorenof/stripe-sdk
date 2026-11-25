<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BankConnectionsResource;

/**
 * BankConnectionsResourceTransactionRefresh
 */
final class TransactionRefresh extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'last_attempted_at',
        'status',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The time at which the last refresh attempt was initiated. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $last_attempted_at;
    /**
     * Time at which the next transaction refresh can be initiated. This value will be `null` when `status` is `pending`. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $next_refresh_available_at;
    /**
     * The status of the last refresh attempt.
     */
    public \StripeSDK\Enums\BankConnectionsResource\TransactionRefresh\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last_attempted_at' => is_int($value) ? $this->last_attempted_at = $value : parent::assignMember($name, $value),
            'next_refresh_available_at' => $value === null || is_int($value) ? $this->next_refresh_available_at = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\BankConnectionsResource\TransactionRefresh\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
