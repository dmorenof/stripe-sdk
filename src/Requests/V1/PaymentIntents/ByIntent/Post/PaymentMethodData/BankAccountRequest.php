<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\PaymentMethodData;

/**
 * param
 */
final class BankAccountRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_number',
        'bank_code',
        'branch_code',
        'suffix',
    ];

    protected const array VALIDATION = [
        'account_holder_name' => [
            'maxLength' => 5000,
        ],
        'account_number' => [
            'maxLength' => 5000,
        ],
        'bank_code' => [
            'maxLength' => 5000,
        ],
        'branch_code' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 128,
        ],
        'suffix' => [
            'maxLength' => 5000,
        ],
    ];

    public string $account_holder_name {
        set {
            $this->assigning('account_holder_name', $value);
            $this->account_holder_name = $value;
        }
    }
    public string $account_number {
        set {
            $this->assigning('account_number', $value);
            $this->account_number = $value;
        }
    }
    public string $bank_code {
        set {
            $this->assigning('bank_code', $value);
            $this->bank_code = $value;
        }
    }
    public string $branch_code {
        set {
            $this->assigning('branch_code', $value);
            $this->branch_code = $value;
        }
    }
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    public string $suffix {
        set {
            $this->assigning('suffix', $value);
            $this->suffix = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_name' => is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_number' => is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'bank_code' => is_string($value) ? $this->bank_code = $value : parent::assignMember($name, $value),
            'branch_code' => is_string($value) ? $this->branch_code = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'suffix' => is_string($value) ? $this->suffix = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
