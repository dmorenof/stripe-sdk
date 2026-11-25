<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * pending_invoice_item_interval_params
 */
final class IntervalVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'interval',
    ];

    public \StripeSDK\Enums\InvoiceIntervalRequestVariant1\InvoiceIntervalRequestVariant1IntervalEnum $interval;
    public int $interval_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\InvoiceIntervalRequestVariant1\InvoiceIntervalRequestVariant1IntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
