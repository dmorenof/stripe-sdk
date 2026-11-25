<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Quotes\Post\LineItemsItem\PriceData;

/**
 * recurring_adhoc
 */
final class DataRecurringRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'interval',
    ];

    public \StripeSDK\Enums\V1\Quotes\Post\LineItemsItem\PriceData\Recurring\RecurringIntervalEnum $interval;
    public int $interval_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\V1\Quotes\Post\LineItemsItem\PriceData\Recurring\RecurringIntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
