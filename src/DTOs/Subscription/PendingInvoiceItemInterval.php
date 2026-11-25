<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionPendingInvoiceItemInterval
 */
final class PendingInvoiceItemInterval extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'interval',
        'interval_count',
    ];

    /**
     * Specifies invoicing frequency. Either `day`, `week`, `month` or `year`.
     */
    public \StripeSDK\Enums\Subscription\PendingInvoiceItemInterval\IntervalEnum $interval;
    /**
     * The number of intervals between invoices. For example, `interval=month` and `interval_count=3` bills every 3 months. Maximum of one year interval allowed (1 year, 12 months, or 52 weeks).
     */
    public int $interval_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\Subscription\PendingInvoiceItemInterval\IntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
