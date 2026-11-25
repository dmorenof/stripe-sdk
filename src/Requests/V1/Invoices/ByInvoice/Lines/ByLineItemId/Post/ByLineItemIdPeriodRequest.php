<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\Lines\ByLineItemId\Post;

/**
 * period
 *
 * The period associated with this invoice item. When set to different values, the period will be rendered on the invoice. If you have [Stripe Revenue Recognition](https://docs.stripe.com/revenue-recognition) enabled, the period will be used to recognize and defer revenue. See the [Revenue Recognition documentation](https://docs.stripe.com/revenue-recognition/methodology/subscriptions-and-invoicing) for details.
 */
final class ByLineItemIdPeriodRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end',
        'start',
    ];

    /**
     * Format: unix-time
     */
    public int $end;
    /**
     * Format: unix-time
     */
    public int $start;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end' => is_int($value) ? $this->end = $value : parent::assignMember($name, $value),
            'start' => is_int($value) ? $this->start = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
