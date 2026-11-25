<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerBalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceEuBankTransfer
 */
final class BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceEuBankTransfer extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'bic' => [
            'maxLength' => 5000,
        ],
        'iban_last4' => [
            'maxLength' => 5000,
        ],
        'sender_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The BIC of the bank of the sender of the funding.
     */
    public ?string $bic {
        set {
            $this->assigning('bic', $value);
            $this->bic = $value;
        }
    }
    /**
     * The last 4 digits of the IBAN of the sender of the funding.
     */
    public ?string $iban_last4 {
        set {
            $this->assigning('iban_last4', $value);
            $this->iban_last4 = $value;
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
            'bic' => $value === null || is_string($value) ? $this->bic = $value : parent::assignMember($name, $value),
            'iban_last4' => $value === null || is_string($value) ? $this->iban_last4 = $value : parent::assignMember($name, $value),
            'sender_name' => $value === null || is_string($value) ? $this->sender_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
