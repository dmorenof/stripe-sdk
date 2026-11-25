<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * PhoneCheckResult
 *
 * Result from a phone check
 */
final class PhoneReport extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    protected const array VALIDATION = [
        'phone' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Details on the verification error. Present when status is `unverified`.
     */
    public ?\StripeSDK\DTOs\Gelato\PhoneReportError $error;
    /**
     * Phone to be verified.
     */
    public ?string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }
    /**
     * Status of this `phone` check.
     */
    public \StripeSDK\Enums\Gelato\PhoneReport\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value === null || $value instanceof \stdClass ? $this->error = $value === null ? null : new \StripeSDK\DTOs\Gelato\PhoneReportError($value) : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Gelato\PhoneReport\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
