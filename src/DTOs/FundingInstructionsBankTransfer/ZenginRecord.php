<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\FundingInstructionsBankTransfer;

/**
 * ZenginRecord
 *
 * Zengin Records contain Japan bank account details per the Zengin format.
 */
final class ZenginRecord extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_holder_address',
        'bank_address',
    ];

    protected const array VALIDATION = [
        'account_holder_name' => [
            'maxLength' => 5000,
        ],
        'account_number' => [
            'maxLength' => 5000,
        ],
        'account_type' => [
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
        'branch_name' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Address $account_holder_address;
    /**
     * The account holder name
     */
    public ?string $account_holder_name {
        set {
            $this->assigning('account_holder_name', $value);
            $this->account_holder_name = $value;
        }
    }
    /**
     * The account number
     */
    public ?string $account_number {
        set {
            $this->assigning('account_number', $value);
            $this->account_number = $value;
        }
    }
    /**
     * The bank account type. In Japan, this can only be `futsu` or `toza`.
     */
    public ?string $account_type {
        set {
            $this->assigning('account_type', $value);
            $this->account_type = $value;
        }
    }
    public \StripeSDK\DTOs\Address $bank_address;
    /**
     * The bank code of the account
     */
    public ?string $bank_code {
        set {
            $this->assigning('bank_code', $value);
            $this->bank_code = $value;
        }
    }
    /**
     * The bank name of the account
     */
    public ?string $bank_name {
        set {
            $this->assigning('bank_name', $value);
            $this->bank_name = $value;
        }
    }
    /**
     * The branch code of the account
     */
    public ?string $branch_code {
        set {
            $this->assigning('branch_code', $value);
            $this->branch_code = $value;
        }
    }
    /**
     * The branch name of the account
     */
    public ?string $branch_name {
        set {
            $this->assigning('branch_name', $value);
            $this->branch_name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_address' => $value instanceof \stdClass ? $this->account_holder_address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'account_holder_name' => $value === null || is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_number' => $value === null || is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'account_type' => $value === null || is_string($value) ? $this->account_type = $value : parent::assignMember($name, $value),
            'bank_address' => $value instanceof \stdClass ? $this->bank_address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'bank_code' => $value === null || is_string($value) ? $this->bank_code = $value : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'branch_code' => $value === null || is_string($value) ? $this->branch_code = $value : parent::assignMember($name, $value),
            'branch_name' => $value === null || is_string($value) ? $this->branch_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
