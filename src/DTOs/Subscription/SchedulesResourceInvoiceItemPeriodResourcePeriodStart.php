<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourceInvoiceItemPeriodResourcePeriodStart
 */
final class SchedulesResourceInvoiceItemPeriodResourcePeriodStart extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * A precise Unix timestamp for the start of the invoice item period. Must be less than or equal to `period.end`.
     * Format: unix-time
     */
    public int $timestamp;
    /**
     * Select how to calculate the start of the invoice item period.
     */
    public \StripeSDK\Enums\Subscription\SchedulesResourceInvoiceItemPeriodResourcePeriodStart\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Subscription\SchedulesResourceInvoiceItemPeriodResourcePeriodStart\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
