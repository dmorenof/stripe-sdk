<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BankConnectionsResource;

/**
 * BankConnectionsResourceAccountNumberDetails
 */
final class AccountNumberDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'identifier_type',
        'status',
        'supported_networks',
    ];

    /**
     * When the account number is expected to expire, if applicable.
     * Format: unix-time
     */
    public ?int $expected_expiry_date;
    /**
     * The type of account number associated with the account.
     */
    public \StripeSDK\Enums\BankConnectionsResource\AccountNumberDetails\IdentifierTypeEnum $identifier_type;
    /**
     * Whether the account number is currently active and usable for transactions.
     */
    public \StripeSDK\Enums\BankConnectionsResource\AccountNumberDetails\StatusEnum $status;
    /**
     * The payment networks that the account number can be used for.
     */
    public \StripeSDK\Collections\BankConnectionsResource\AccountNumberDetails\SupportedNetworksCollection $supported_networks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expected_expiry_date' => $value === null || is_int($value) ? $this->expected_expiry_date = $value : parent::assignMember($name, $value),
            'identifier_type' => is_string($value) ? $this->identifier_type = \StripeSDK\Enums\BankConnectionsResource\AccountNumberDetails\IdentifierTypeEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\BankConnectionsResource\AccountNumberDetails\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
