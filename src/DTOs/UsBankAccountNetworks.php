<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * us_bank_account_networks
 */
final class UsBankAccountNetworks extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'supported',
    ];

    protected const array VALIDATION = [
        'preferred' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The preferred network.
     */
    public ?string $preferred {
        set {
            $this->assigning('preferred', $value);
            $this->preferred = $value;
        }
    }
    /**
     * All supported networks.
     */
    public \StripeSDK\Collections\UsBankAccountNetworks\SupportedCollection $supported;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'preferred' => $value === null || is_string($value) ? $this->preferred = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
