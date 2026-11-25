<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_us_bank_account
 */
final class MethodUsBankAccount extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'bank_name' => [
            'maxLength' => 5000,
        ],
        'financial_connections_account' => [
            'maxLength' => 5000,
        ],
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'routing_number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Account holder type: individual or company.
     */
    public ?\StripeSDK\Enums\Payment\MethodUsBankAccount\HolderTypeEnum $account_holder_type;
    /**
     * Account type: checkings or savings. Defaults to checking if omitted.
     */
    public ?\StripeSDK\Enums\Payment\MethodUsBankAccount\AccountTypeEnum $account_type;
    /**
     * The name of the bank.
     */
    public ?string $bank_name {
        set {
            $this->assigning('bank_name', $value);
            $this->bank_name = $value;
        }
    }
    /**
     * The ID of the Financial Connections Account used to create the payment method.
     */
    public ?string $financial_connections_account {
        set {
            $this->assigning('financial_connections_account', $value);
            $this->financial_connections_account = $value;
        }
    }
    /**
     * Uniquely identifies this particular bank account. You can use this attribute to check whether two bank accounts are the same.
     */
    public ?string $fingerprint {
        set {
            $this->assigning('fingerprint', $value);
            $this->fingerprint = $value;
        }
    }
    /**
     * Last four digits of the bank account number.
     */
    public ?string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    /**
     * Contains information about US bank account networks that can be used.
     */
    public ?\StripeSDK\DTOs\UsBankAccountNetworks $networks;
    /**
     * Routing number of the bank account.
     */
    public ?string $routing_number {
        set {
            $this->assigning('routing_number', $value);
            $this->routing_number = $value;
        }
    }
    /**
     * Contains information about the future reusability of this PaymentMethod.
     */
    public ?\StripeSDK\DTOs\Payment\MethodUsBankAccountStatusDetails $status_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_type' => $value === null || is_string($value) ? $this->account_holder_type = $value === null ? null : \StripeSDK\Enums\Payment\MethodUsBankAccount\HolderTypeEnum::from($value) : parent::assignMember($name, $value),
            'account_type' => $value === null || is_string($value) ? $this->account_type = $value === null ? null : \StripeSDK\Enums\Payment\MethodUsBankAccount\AccountTypeEnum::from($value) : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'financial_connections_account' => $value === null || is_string($value) ? $this->financial_connections_account = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'networks' => $value === null || $value instanceof \stdClass ? $this->networks = $value === null ? null : new \StripeSDK\DTOs\UsBankAccountNetworks($value) : parent::assignMember($name, $value),
            'routing_number' => $value === null || is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            'status_details' => $value === null || $value instanceof \stdClass ? $this->status_details = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodUsBankAccountStatusDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
