<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\FundingInstructionsBankTransfer;

/**
 * SortCodeRecord
 *
 * Sort Code Records contain U.K. bank account details per the sort code format.
 */
final class SortCodeRecord extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_holder_address',
        'account_holder_name',
        'account_number',
        'bank_address',
        'sort_code',
    ];

    protected const array VALIDATION = [
        'account_holder_name' => [
            'maxLength' => 5000,
        ],
        'account_number' => [
            'maxLength' => 5000,
        ],
        'sort_code' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Address $account_holder_address;
    /**
     * The name of the person or business that owns the bank account
     */
    public string $account_holder_name {
        set {
            $this->assigning('account_holder_name', $value);
            $this->account_holder_name = $value;
        }
    }
    /**
     * The account number
     */
    public string $account_number {
        set {
            $this->assigning('account_number', $value);
            $this->account_number = $value;
        }
    }
    public \StripeSDK\DTOs\Address $bank_address;
    /**
     * The six-digit sort code
     */
    public string $sort_code {
        set {
            $this->assigning('sort_code', $value);
            $this->sort_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_address' => $value instanceof \stdClass ? $this->account_holder_address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'account_holder_name' => is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_number' => is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'bank_address' => $value instanceof \stdClass ? $this->bank_address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'sort_code' => is_string($value) ? $this->sort_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
