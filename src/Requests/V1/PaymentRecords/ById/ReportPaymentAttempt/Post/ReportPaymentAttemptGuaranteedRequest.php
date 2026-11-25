<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post;

/**
 * guaranteed
 *
 * Information about the payment attempt guarantee.
 */
final class ReportPaymentAttemptGuaranteedRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'guaranteed_at',
    ];

    /**
     * Format: unix-time
     */
    public int $guaranteed_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'guaranteed_at' => is_int($value) ? $this->guaranteed_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
