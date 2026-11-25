<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post\PhasesItem\AddInvoiceItemsItem\Period;

/**
 * invoice_item_period_end
 */
final class PeriodEndRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Format: unix-time
     */
    public int $timestamp;
    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PhasesItem\AddInvoiceItemsItem\Period\End\EndTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PhasesItem\AddInvoiceItemsItem\Period\End\EndTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
