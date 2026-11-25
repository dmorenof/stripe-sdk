<?php

declare(strict_types=1);

namespace StripeSDK\Requests\BillingSchedulesRequestVariant1Item;

/**
 * billing_schedules_bill_until
 */
final class BillUntilRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\BillingSchedulesRequestVariant1Item\BillUntil\UntilDurationRequest $duration;
    /**
     * Format: unix-time
     */
    public int $timestamp;
    public \StripeSDK\Enums\BillingSchedulesRequestVariant1Item\BillUntil\UntilTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\BillingSchedulesRequestVariant1Item\BillUntil\UntilTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
