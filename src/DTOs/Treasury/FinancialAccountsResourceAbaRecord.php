<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * ABARecord
 *
 * ABA Records contain U.S. bank account details per the ABA format.
 */
final class FinancialAccountsResourceAbaRecord extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_holder_name',
        'account_number_last4',
        'bank_name',
        'routing_number',
    ];

    protected const array VALIDATION = [
        'account_holder_name' => [
            'maxLength' => 5000,
        ],
        'account_number' => [
            'maxLength' => 5000,
        ],
        'account_number_last4' => [
            'maxLength' => 5000,
        ],
        'bank_name' => [
            'maxLength' => 5000,
        ],
        'routing_number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The name of the person or business that owns the bank account.
     */
    public string $account_holder_name {
        set {
            $this->assigning('account_holder_name', $value);
            $this->account_holder_name = $value;
        }
    }
    /**
     * The account number.
     */
    public ?string $account_number {
        set {
            $this->assigning('account_number', $value);
            $this->account_number = $value;
        }
    }
    /**
     * The last four characters of the account number.
     */
    public string $account_number_last4 {
        set {
            $this->assigning('account_number_last4', $value);
            $this->account_number_last4 = $value;
        }
    }
    /**
     * Name of the bank.
     */
    public string $bank_name {
        set {
            $this->assigning('bank_name', $value);
            $this->bank_name = $value;
        }
    }
    /**
     * Routing number for the account.
     */
    public string $routing_number {
        set {
            $this->assigning('routing_number', $value);
            $this->routing_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_name' => is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_number' => $value === null || is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'account_number_last4' => is_string($value) ? $this->account_number_last4 = $value : parent::assignMember($name, $value),
            'bank_name' => is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'routing_number' => is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
