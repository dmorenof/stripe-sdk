<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * SourceCodeVerificationFlow
 */
final class CodeVerificationFlow extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'attempts_remaining',
        'status',
    ];

    protected const array VALIDATION = [
        'status' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The number of attempts remaining to authenticate the source object with a verification code.
     */
    public int $attempts_remaining;
    /**
     * The status of the code verification, either `pending` (awaiting verification, `attempts_remaining` should be greater than 0), `succeeded` (successful verification) or `failed` (failed verification, cannot be verified anymore as `attempts_remaining` should be 0).
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attempts_remaining' => is_int($value) ? $this->attempts_remaining = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
