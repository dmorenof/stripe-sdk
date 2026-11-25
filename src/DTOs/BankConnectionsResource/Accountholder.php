<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BankConnectionsResource;

/**
 * BankConnectionsResourceAccountholder
 */
final class Accountholder extends \Dmorenof\SdkRuntime\DTO
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
     * The ID of the Stripe account that this account belongs to. Only available when `account_holder.type` is `account`.
     */
    public \StripeSDK\DTOs\BankConnectionsResource\Accountholder\AccountDTO $account;
    /**
     * The ID for an Account representing a customer that this account belongs to. Only available when `account_holder.type` is `customer`.
     */
    public \StripeSDK\DTOs\BankConnectionsResource\Accountholder\CustomerDTO $customer;
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Type of account holder that this account belongs to.
     */
    public \StripeSDK\Enums\BankConnectionsResource\Accountholder\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\BankConnectionsResource\Accountholder\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
