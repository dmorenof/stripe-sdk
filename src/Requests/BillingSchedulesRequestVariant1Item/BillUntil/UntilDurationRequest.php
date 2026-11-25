<?php

declare(strict_types=1);

namespace StripeSDK\Requests\BillingSchedulesRequestVariant1Item\BillUntil;

/**
 * billing_schedules_bill_until_duration
 */
final class UntilDurationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'interval',
    ];

    public \StripeSDK\Enums\BillingSchedulesRequestVariant1Item\BillUntil\Duration\DurationIntervalEnum $interval;
    public int $interval_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\BillingSchedulesRequestVariant1Item\BillUntil\Duration\DurationIntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
