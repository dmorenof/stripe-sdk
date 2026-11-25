<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerBalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceJpBankTransfer
 */
final class BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceJpBankTransfer extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'sender_bank' => [
            'maxLength' => 5000,
        ],
        'sender_branch' => [
            'maxLength' => 5000,
        ],
        'sender_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The name of the bank of the sender of the funding.
     */
    public ?string $sender_bank {
        set {
            $this->assigning('sender_bank', $value);
            $this->sender_bank = $value;
        }
    }
    /**
     * The name of the bank branch of the sender of the funding.
     */
    public ?string $sender_branch {
        set {
            $this->assigning('sender_branch', $value);
            $this->sender_branch = $value;
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sender_bank' => $value === null || is_string($value) ? $this->sender_bank = $value : parent::assignMember($name, $value),
            'sender_branch' => $value === null || is_string($value) ? $this->sender_branch = $value : parent::assignMember($name, $value),
            'sender_name' => $value === null || is_string($value) ? $this->sender_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
