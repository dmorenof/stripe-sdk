<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_nz_bank_account
 */
final class MethodNzBankAccount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bank_code',
        'bank_name',
        'branch_code',
        'last4',
    ];

    protected const array VALIDATION = [
        'account_holder_name' => [
            'maxLength' => 5000,
        ],
        'bank_code' => [
            'maxLength' => 5000,
        ],
        'bank_name' => [
            'maxLength' => 5000,
        ],
        'branch_code' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'suffix' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The name on the bank account. Only present if the account holder name is different from the name of the authorized signatory collected in the PaymentMethod’s billing details.
     */
    public ?string $account_holder_name {
        set {
            $this->assigning('account_holder_name', $value);
            $this->account_holder_name = $value;
        }
    }
    /**
     * The numeric code for the bank account's bank.
     */
    public string $bank_code {
        set {
            $this->assigning('bank_code', $value);
            $this->bank_code = $value;
        }
    }
    /**
     * The name of the bank.
     */
    public string $bank_name {
        set {
            $this->assigning('bank_name', $value);
            $this->bank_name = $value;
        }
    }
    /**
     * The numeric code for the bank account's bank branch.
     */
    public string $branch_code {
        set {
            $this->assigning('branch_code', $value);
            $this->branch_code = $value;
        }
    }
    /**
     * Last four digits of the bank account number.
     */
    public string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    /**
     * The suffix of the bank account number.
     */
    public ?string $suffix {
        set {
            $this->assigning('suffix', $value);
            $this->suffix = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_name' => $value === null || is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'bank_code' => is_string($value) ? $this->bank_code = $value : parent::assignMember($name, $value),
            'bank_name' => is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'branch_code' => is_string($value) ? $this->branch_code = $value : parent::assignMember($name, $value),
            'last4' => is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'suffix' => $value === null || is_string($value) ? $this->suffix = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
