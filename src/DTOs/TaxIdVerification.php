<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * tax_id_verification
 */
final class TaxIdVerification extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    protected const array VALIDATION = [
        'verified_address' => [
            'maxLength' => 5000,
        ],
        'verified_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Verification status, one of `pending`, `verified`, `unverified`, or `unavailable`.
     */
    public \StripeSDK\Enums\TaxIdVerification\StatusEnum $status;
    /**
     * Verified address.
     */
    public ?string $verified_address {
        set {
            $this->assigning('verified_address', $value);
            $this->verified_address = $value;
        }
    }
    /**
     * Verified name.
     */
    public ?string $verified_name {
        set {
            $this->assigning('verified_name', $value);
            $this->verified_name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\TaxIdVerification\StatusEnum::from($value) : parent::assignMember($name, $value),
            'verified_address' => $value === null || is_string($value) ? $this->verified_address = $value : parent::assignMember($name, $value),
            'verified_name' => $value === null || is_string($value) ? $this->verified_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
