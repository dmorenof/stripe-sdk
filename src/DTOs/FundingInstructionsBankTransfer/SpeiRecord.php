<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\FundingInstructionsBankTransfer;

/**
 * SpeiRecord
 *
 * SPEI Records contain Mexico bank account details per the SPEI format.
 */
final class SpeiRecord extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_holder_address',
        'account_holder_name',
        'bank_address',
        'bank_code',
        'bank_name',
        'clabe',
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
        'clabe' => [
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
    public \StripeSDK\DTOs\Address $bank_address;
    /**
     * The three-digit bank code
     */
    public string $bank_code {
        set {
            $this->assigning('bank_code', $value);
            $this->bank_code = $value;
        }
    }
    /**
     * The short banking institution name
     */
    public string $bank_name {
        set {
            $this->assigning('bank_name', $value);
            $this->bank_name = $value;
        }
    }
    /**
     * The CLABE number
     */
    public string $clabe {
        set {
            $this->assigning('clabe', $value);
            $this->clabe = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_address' => $value instanceof \stdClass ? $this->account_holder_address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'account_holder_name' => is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'bank_address' => $value instanceof \stdClass ? $this->bank_address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'bank_code' => is_string($value) ? $this->bank_code = $value : parent::assignMember($name, $value),
            'bank_name' => is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'clabe' => is_string($value) ? $this->clabe = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
