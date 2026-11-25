<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * TaxIDsOwner
 */
final class TaxIDsOwner extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'customer_account' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The account being referenced when `type` is `account`.
     */
    public \StripeSDK\DTOs\TaxIDsOwner\AccountDTO $account;
    /**
     * The Connect Application being referenced when `type` is `application`.
     */
    public \StripeSDK\DTOs\TaxIDsOwner\ApplicationDTO $application;
    /**
     * The customer being referenced when `type` is `customer`.
     */
    public \StripeSDK\DTOs\TaxIDsOwner\CustomerDTO $customer;
    /**
     * The Account representing the customer being referenced when `type` is `customer`.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Type of owner referenced.
     */
    public \StripeSDK\Enums\TaxIDsOwner\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TaxIDsOwner\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
