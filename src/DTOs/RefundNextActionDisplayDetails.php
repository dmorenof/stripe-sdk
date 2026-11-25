<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * RefundNextActionDisplayDetails
 */
final class RefundNextActionDisplayDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email_sent',
        'expires_at',
    ];

    public \StripeSDK\DTOs\EmailSent $email_sent;
    /**
     * The expiry timestamp.
     * Format: unix-time
     */
    public int $expires_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email_sent' => $value instanceof \stdClass ? $this->email_sent = new \StripeSDK\DTOs\EmailSent($value) : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
