<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * Billing Schedules Bill Until
 *
 * Specifies the end of billing period.
 */
final class BillingSchedulesBillUntil extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'computed_timestamp',
        'type',
    ];

    /**
     * The timestamp the billing schedule will apply until.
     * Format: unix-time
     */
    public int $computed_timestamp;
    /**
     * Specifies the billing period.
     */
    public ?\StripeSDK\DTOs\SubscriptionsResource\BillingSchedulesBillUntilDuration $duration;
    /**
     * If specified, the billing schedule will apply until the specified timestamp.
     * Format: unix-time
     */
    public ?int $timestamp;
    /**
     * Describes how the billing schedule will determine the end date. Either `duration` or `timestamp`.
     */
    public \StripeSDK\Enums\SubscriptionsResource\BillingSchedulesBillUntil\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'computed_timestamp' => is_int($value) ? $this->computed_timestamp = $value : parent::assignMember($name, $value),
            'duration' => $value === null || $value instanceof \stdClass ? $this->duration = $value === null ? null : new \StripeSDK\DTOs\SubscriptionsResource\BillingSchedulesBillUntilDuration($value) : parent::assignMember($name, $value),
            'timestamp' => $value === null || is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\SubscriptionsResource\BillingSchedulesBillUntil\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
