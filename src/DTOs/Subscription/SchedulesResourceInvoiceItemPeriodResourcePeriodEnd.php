<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourceInvoiceItemPeriodResourcePeriodEnd
 */
final class SchedulesResourceInvoiceItemPeriodResourcePeriodEnd extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * A precise Unix timestamp for the end of the invoice item period. Must be greater than or equal to `period.start`.
     * Format: unix-time
     */
    public int $timestamp;
    /**
     * Select how to calculate the end of the invoice item period.
     */
    public \StripeSDK\Enums\Subscription\SchedulesResourceInvoiceItemPeriodResourcePeriodEnd\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Subscription\SchedulesResourceInvoiceItemPeriodResourcePeriodEnd\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
