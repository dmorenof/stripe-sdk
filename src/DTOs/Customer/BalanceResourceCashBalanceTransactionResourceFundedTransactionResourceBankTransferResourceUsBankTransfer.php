<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerBalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceUsBankTransfer
 */
final class BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceUsBankTransfer extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'sender_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The banking network used for this funding.
     */
    public \StripeSDK\Enums\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceUsBankTransfer\NetworkEnum $network;
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
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceUsBankTransfer\NetworkEnum::from($value) : parent::assignMember($name, $value),
            'sender_name' => $value === null || is_string($value) ? $this->sender_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
