<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * GelatoPhoneReportError
 */
final class PhoneReportError extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reason' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A short machine-readable string giving the reason for the verification failure.
     */
    public ?\StripeSDK\Enums\Gelato\PhoneReportError\CodeEnum $code;
    /**
     * A human-readable message giving the reason for the failure. These messages can be shown to your users.
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
            'code' => $value === null || is_string($value) ? $this->code = $value === null ? null : \StripeSDK\Enums\Gelato\PhoneReportError\CodeEnum::from($value) : parent::assignMember($name, $value),
            'reason' => $value === null || is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
