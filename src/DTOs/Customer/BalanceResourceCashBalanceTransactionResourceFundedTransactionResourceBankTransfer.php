<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerBalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransfer
 */
final class BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransfer extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceEuBankTransfer $eu_bank_transfer;
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceGbBankTransfer $gb_bank_transfer;
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceJpBankTransfer $jp_bank_transfer;
    /**
     * The user-supplied reference field on the bank transfer.
     */
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * The funding method type used to fund the customer balance. Permitted values include: `eu_bank_transfer`, `gb_bank_transfer`, `jp_bank_transfer`, `mx_bank_transfer`, or `us_bank_transfer`.
     */
    public \StripeSDK\Enums\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransfer\TypeEnum $type;
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceUsBankTransfer $us_bank_transfer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'eu_bank_transfer' => $value instanceof \stdClass ? $this->eu_bank_transfer = new \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceEuBankTransfer($value) : parent::assignMember($name, $value),
            'gb_bank_transfer' => $value instanceof \stdClass ? $this->gb_bank_transfer = new \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceGbBankTransfer($value) : parent::assignMember($name, $value),
            'jp_bank_transfer' => $value instanceof \stdClass ? $this->jp_bank_transfer = new \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceJpBankTransfer($value) : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransfer\TypeEnum::from($value) : parent::assignMember($name, $value),
            'us_bank_transfer' => $value instanceof \stdClass ? $this->us_bank_transfer = new \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceUsBankTransfer($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
