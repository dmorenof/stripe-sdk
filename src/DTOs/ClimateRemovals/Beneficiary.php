<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ClimateRemovals;

/**
 * ClimateRemovalsBeneficiary
 */
final class Beneficiary extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'public_name',
    ];

    protected const array VALIDATION = [
        'public_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Publicly displayable name for the end beneficiary of carbon removal.
     */
    public string $public_name {
        set {
            $this->assigning('public_name', $value);
            $this->public_name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'public_name' => is_string($value) ? $this->public_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
