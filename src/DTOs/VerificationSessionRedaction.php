<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * verification_session_redaction
 */
final class VerificationSessionRedaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    /**
     * Indicates whether this object and its related objects have been redacted or not.
     */
    public \StripeSDK\Enums\VerificationSessionRedaction\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\VerificationSessionRedaction\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
