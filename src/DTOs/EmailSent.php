<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * EmailSent
 */
final class EmailSent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email_sent_at',
        'email_sent_to',
    ];

    protected const array VALIDATION = [
        'email_sent_to' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The timestamp when the email was sent.
     * Format: unix-time
     */
    public int $email_sent_at;
    /**
     * The recipient's email address.
     */
    public string $email_sent_to {
        set {
            $this->assigning('email_sent_to', $value);
            $this->email_sent_to = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email_sent_at' => is_int($value) ? $this->email_sent_at = $value : parent::assignMember($name, $value),
            'email_sent_to' => is_string($value) ? $this->email_sent_to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
