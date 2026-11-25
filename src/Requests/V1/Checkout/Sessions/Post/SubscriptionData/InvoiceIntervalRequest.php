<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\SubscriptionData;

/**
 * pending_invoice_item_interval_params
 */
final class InvoiceIntervalRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'interval',
    ];

    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\SubscriptionData\PendingInvoiceItemInterval\IntervalIntervalEnum $interval;
    public int $interval_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\V1\Checkout\Sessions\Post\SubscriptionData\PendingInvoiceItemInterval\IntervalIntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
