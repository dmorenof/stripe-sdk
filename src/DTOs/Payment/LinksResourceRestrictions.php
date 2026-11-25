<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceRestrictions
 */
final class LinksResourceRestrictions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'completed_sessions',
    ];

    public \StripeSDK\DTOs\Payment\LinksResourceCompletedSessions $completed_sessions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'completed_sessions' => $value instanceof \stdClass ? $this->completed_sessions = new \StripeSDK\DTOs\Payment\LinksResourceCompletedSessions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
