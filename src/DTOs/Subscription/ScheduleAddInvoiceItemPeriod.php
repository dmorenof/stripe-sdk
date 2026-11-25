<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionScheduleAddInvoiceItemPeriod
 */
final class ScheduleAddInvoiceItemPeriod extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end',
        'start',
    ];

    public \StripeSDK\DTOs\Subscription\SchedulesResourceInvoiceItemPeriodResourcePeriodEnd $end;
    public \StripeSDK\DTOs\Subscription\SchedulesResourceInvoiceItemPeriodResourcePeriodStart $start;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end' => $value instanceof \stdClass ? $this->end = new \StripeSDK\DTOs\Subscription\SchedulesResourceInvoiceItemPeriodResourcePeriodEnd($value) : parent::assignMember($name, $value),
            'start' => $value instanceof \stdClass ? $this->start = new \StripeSDK\DTOs\Subscription\SchedulesResourceInvoiceItemPeriodResourcePeriodStart($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
