<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerBalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceGbBankTransfer
 */
final class BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceGbBankTransfer extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'account_number_last4' => [
            'maxLength' => 5000,
        ],
        'sender_name' => [
            'maxLength' => 5000,
        ],
        'sort_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The last 4 digits of the account number of the sender of the funding.
     */
    public ?string $account_number_last4 {
        set {
            $this->assigning('account_number_last4', $value);
            $this->account_number_last4 = $value;
        }
    }
    /**
     * The full name of the sender, as supplied by the sending bank.
     */
    public ?string $sender_name {
        set {
            $this->assigning('sender_name', $value);
            $this->sender_name = $value;
        }
    }
    /**
     * The sort code of the bank of the sender of the funding
     */
    public ?string $sort_code {
        set {
            $this->assigning('sort_code', $value);
            $this->sort_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_number_last4' => $value === null || is_string($value) ? $this->account_number_last4 = $value : parent::assignMember($name, $value),
            'sender_name' => $value === null || is_string($value) ? $this->sender_name = $value : parent::assignMember($name, $value),
            'sort_code' => $value === null || is_string($value) ? $this->sort_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
