<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodData\UsBankAccount;

/**
 * payment_method_param
 */
final class BankAccountRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'account_number' => [
            'maxLength' => 5000,
        ],
        'financial_connections_account' => [
            'maxLength' => 5000,
        ],
        'routing_number' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodData\UsBankAccount\HolderTypeEnum $account_holder_type;
    public string $account_number {
        set {
            $this->assigning('account_number', $value);
            $this->account_number = $value;
        }
    }
    public \StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodData\UsBankAccount\AccountTypeEnum $account_type;
    public string $financial_connections_account {
        set {
            $this->assigning('financial_connections_account', $value);
            $this->financial_connections_account = $value;
        }
    }
    public string $routing_number {
        set {
            $this->assigning('routing_number', $value);
            $this->routing_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_type' => is_string($value) ? $this->account_holder_type = \StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodData\UsBankAccount\HolderTypeEnum::from($value) : parent::assignMember($name, $value),
            'account_number' => is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'account_type' => is_string($value) ? $this->account_type = \StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodData\UsBankAccount\AccountTypeEnum::from($value) : parent::assignMember($name, $value),
            'financial_connections_account' => is_string($value) ? $this->financial_connections_account = $value : parent::assignMember($name, $value),
            'routing_number' => is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
