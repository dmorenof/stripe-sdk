<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\QuotesResource;

/**
 * QuotesResourceRecurring
 */
final class Recurring extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_subtotal',
        'amount_total',
        'interval',
        'interval_count',
        'total_details',
    ];

    /**
     * Total before any discounts or taxes are applied.
     */
    public int $amount_subtotal;
    /**
     * Total after discounts and taxes are applied.
     */
    public int $amount_total;
    /**
     * The frequency at which a subscription is billed. One of `day`, `week`, `month` or `year`.
     */
    public \StripeSDK\Enums\QuotesResource\Recurring\IntervalEnum $interval;
    /**
     * The number of intervals (specified in the `interval` attribute) between subscription billings. For example, `interval=month` and `interval_count=3` bills every 3 months.
     */
    public int $interval_count;
    public \StripeSDK\DTOs\QuotesResource\TotalDetails $total_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_subtotal' => is_int($value) ? $this->amount_subtotal = $value : parent::assignMember($name, $value),
            'amount_total' => is_int($value) ? $this->amount_total = $value : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\QuotesResource\Recurring\IntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            'total_details' => $value instanceof \stdClass ? $this->total_details = new \StripeSDK\DTOs\QuotesResource\TotalDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
