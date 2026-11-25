<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceCompletedSessions
 */
final class LinksResourceCompletedSessions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'count',
        'limit',
    ];

    /**
     * The current number of checkout sessions that have been completed on the payment link which count towards the `completed_sessions` restriction to be met.
     */
    public int $count;
    /**
     * The maximum number of checkout sessions that can be completed for the `completed_sessions` restriction to be met.
     */
    public int $limit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'limit' => is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
