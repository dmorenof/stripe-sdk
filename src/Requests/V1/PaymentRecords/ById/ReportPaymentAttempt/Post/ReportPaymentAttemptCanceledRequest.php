<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post;

/**
 * canceled
 *
 * Information about the payment attempt cancelation.
 */
final class ReportPaymentAttemptCanceledRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'canceled_at',
    ];

    /**
     * Format: unix-time
     */
    public int $canceled_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'canceled_at' => is_int($value) ? $this->canceled_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
