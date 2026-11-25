<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ById\ReportRefund\Post;

/**
 * refunded
 *
 * Information about the payment attempt refund.
 */
final class ReportRefundRefundedRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'refunded_at',
    ];

    /**
     * Format: unix-time
     */
    public int $refunded_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'refunded_at' => is_int($value) ? $this->refunded_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
