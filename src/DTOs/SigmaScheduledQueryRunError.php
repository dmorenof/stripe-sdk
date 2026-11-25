<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * SigmaScheduledQueryRunError
 */
final class SigmaScheduledQueryRunError extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    protected const array VALIDATION = [
        'message' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Information about the run failure.
     */
    public string $message {
        set {
            $this->assigning('message', $value);
            $this->message = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
