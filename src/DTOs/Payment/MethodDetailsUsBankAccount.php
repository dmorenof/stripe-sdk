<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_us_bank_account
 */
final class MethodDetailsUsBankAccount extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'bank_name' => [
            'maxLength' => 5000,
        ],
        'expected_debit_date' => [
            'maxLength' => 5000,
        ],
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'payment_reference' => [
            'maxLength' => 5000,
        ],
        'routing_number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Account holder type: individual or company.
     */
    public ?\StripeSDK\Enums\Payment\MethodDetailsUsBankAccount\HolderTypeEnum $account_holder_type;
    /**
     * Account type: checkings or savings. Defaults to checking if omitted.
     */
    public ?\StripeSDK\Enums\Payment\MethodDetailsUsBankAccount\AccountTypeEnum $account_type;
    /**
     * Name of the bank associated with the bank account.
     */
    public ?string $bank_name {
        set {
            $this->assigning('bank_name', $value);
            $this->bank_name = $value;
        }
    }
    /**
     * Estimated date to debit the customer's bank account. A date string in YYYY-MM-DD format.
     */
    public string $expected_debit_date {
        set {
            $this->assigning('expected_debit_date', $value);
            $this->expected_debit_date = $value;
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
     * ID of the mandate used to make this payment.
     */
    public \StripeSDK\DTOs\Payment\MethodDetailsUsBankAccount\MandateDTO $mandate;
    /**
     * Reference number to locate ACH payments with customer's bank.
     */
    public ?string $payment_reference {
        set {
            $this->assigning('payment_reference', $value);
            $this->payment_reference = $value;
        }
    }
    /**
     * Routing number of the bank account.
     */
    public ?string $routing_number {
        set {
            $this->assigning('routing_number', $value);
            $this->routing_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_type' => $value === null || is_string($value) ? $this->account_holder_type = $value === null ? null : \StripeSDK\Enums\Payment\MethodDetailsUsBankAccount\HolderTypeEnum::from($value) : parent::assignMember($name, $value),
            'account_type' => $value === null || is_string($value) ? $this->account_type = $value === null ? null : \StripeSDK\Enums\Payment\MethodDetailsUsBankAccount\AccountTypeEnum::from($value) : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'expected_debit_date' => is_string($value) ? $this->expected_debit_date = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'payment_reference' => $value === null || is_string($value) ? $this->payment_reference = $value : parent::assignMember($name, $value),
            'routing_number' => $value === null || is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
