<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\FundingInstructionsBankTransfer;

/**
 * SWIFTRecord
 *
 * SWIFT Records contain U.S. bank account details per the SWIFT format.
 */
final class SwiftRecord extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_holder_address',
        'account_holder_name',
        'account_number',
        'account_type',
        'bank_address',
        'bank_name',
        'swift_code',
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
        'bank_name' => [
            'maxLength' => 5000,
        ],
        'swift_code' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Address $account_holder_address;
    /**
     * The account holder name
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
    /**
     * The account type
     */
    public string $account_type {
        set {
            $this->assigning('account_type', $value);
            $this->account_type = $value;
        }
    }
    public \StripeSDK\DTOs\Address $bank_address;
    /**
     * The bank name
     */
    public string $bank_name {
        set {
            $this->assigning('bank_name', $value);
            $this->bank_name = $value;
        }
    }
    /**
     * The SWIFT code
     */
    public string $swift_code {
        set {
            $this->assigning('swift_code', $value);
            $this->swift_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_address' => $value instanceof \stdClass ? $this->account_holder_address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'account_holder_name' => is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_number' => is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'account_type' => is_string($value) ? $this->account_type = $value : parent::assignMember($name, $value),
            'bank_address' => $value instanceof \stdClass ? $this->bank_address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'bank_name' => is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'swift_code' => is_string($value) ? $this->swift_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
