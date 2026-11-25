<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post;

/**
 * failed
 *
 * Information about the payment attempt failure.
 */
final class ReportPaymentAttemptFailedRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'failed_at',
    ];

    /**
     * Format: unix-time
     */
    public int $failed_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'failed_at' => is_int($value) ? $this->failed_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
