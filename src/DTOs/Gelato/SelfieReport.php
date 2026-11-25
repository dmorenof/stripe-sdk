<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * SelfieCheckResult
 *
 * Result from a selfie check
 */
final class SelfieReport extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    protected const array VALIDATION = [
        'document' => [
            'maxLength' => 5000,
        ],
        'selfie' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * ID of the [File](https://docs.stripe.com/api/files) holding the image of the identity document used in this check.
     */
    public ?string $document {
        set {
            $this->assigning('document', $value);
            $this->document = $value;
        }
    }
    /**
     * Details on the verification error. Present when status is `unverified`.
     */
    public ?\StripeSDK\DTOs\Gelato\SelfieReportError $error;
    /**
     * ID of the [File](https://docs.stripe.com/api/files) holding the image of the selfie used in this check.
     */
    public ?string $selfie {
        set {
            $this->assigning('selfie', $value);
            $this->selfie = $value;
        }
    }
    /**
     * Status of this `selfie` check.
     */
    public \StripeSDK\Enums\Gelato\SelfieReport\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'document' => $value === null || is_string($value) ? $this->document = $value : parent::assignMember($name, $value),
            'error' => $value === null || $value instanceof \stdClass ? $this->error = $value === null ? null : new \StripeSDK\DTOs\Gelato\SelfieReportError($value) : parent::assignMember($name, $value),
            'selfie' => $value === null || is_string($value) ? $this->selfie = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Gelato\SelfieReport\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
