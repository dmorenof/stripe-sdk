<?php

declare(strict_types=1);

namespace StripeSDK\Requests\BillingSchedulesRequest2Variant1Item;

/**
 * billing_schedules_bill_until
 */
final class BillUntilRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\BillingSchedulesRequest2Variant1Item\BillUntil\UntilDurationRequest $duration;
    /**
     * Format: unix-time
     */
    public int $timestamp;
    public \StripeSDK\Enums\BillingSchedulesRequest2Variant1Item\BillUntil\UntilTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\BillingSchedulesRequest2Variant1Item\BillUntil\UntilTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
