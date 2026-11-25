<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * SessionLastError
 *
 * Shows last VerificationSession error
 */
final class SessionLastError extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reason' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A short machine-readable string giving the reason for the verification or user-session failure.
     */
    public ?\StripeSDK\Enums\Gelato\SessionLastError\CodeEnum $code;
    /**
     * A message that explains the reason for verification or user-session failure.
     */
    public ?string $reason {
        set {
            $this->assigning('reason', $value);
            $this->reason = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => $value === null || is_string($value) ? $this->code = $value === null ? null : \StripeSDK\Enums\Gelato\SessionLastError\CodeEnum::from($value) : parent::assignMember($name, $value),
            'reason' => $value === null || is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
