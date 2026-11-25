<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * EmailCheckResult
 *
 * Result from a email check
 */
final class EmailReport extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    protected const array VALIDATION = [
        'email' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Email to be verified.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * Details on the verification error. Present when status is `unverified`.
     */
    public ?\StripeSDK\DTOs\Gelato\EmailReportError $error;
    /**
     * Status of this `email` check.
     */
    public \StripeSDK\Enums\Gelato\EmailReport\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'error' => $value === null || $value instanceof \stdClass ? $this->error = $value === null ? null : new \StripeSDK\DTOs\Gelato\EmailReportError($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Gelato\EmailReport\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
