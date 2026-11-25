<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post;

/**
 * token_create_bank_account
 *
 * The bank account this token will represent.
 */
final class BankAccountRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_number',
        'country',
    ];

    protected const array VALIDATION = [
        'account_holder_name' => [
            'maxLength' => 5000,
        ],
        'account_holder_type' => [
            'maxLength' => 5000,
        ],
        'account_number' => [
            'maxLength' => 5000,
        ],
        'account_type' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'payment_method' => [
            'maxLength' => 5000,
        ],
        'routing_number' => [
            'maxLength' => 5000,
        ],
    ];

    public string $account_holder_name {
        set {
            $this->assigning('account_holder_name', $value);
            $this->account_holder_name = $value;
        }
    }
    public \StripeSDK\Enums\V1\Tokens\Post\BankAccount\HolderTypeEnum $account_holder_type {
        set {
            $this->assigning('account_holder_type', $value);
            $this->account_holder_type = $value;
        }
    }
    public string $account_number {
        set {
            $this->assigning('account_number', $value);
            $this->account_number = $value;
        }
    }
    public \StripeSDK\Enums\V1\Tokens\Post\BankAccount\AccountTypeEnum $account_type {
        set {
            $this->assigning('account_type', $value);
            $this->account_type = $value;
        }
    }
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Format: currency
     */
    public string $currency;
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    public string $routing_number {
        set {
            $this->assigning('routing_number', $value);
            $this->routing_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_name' => is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_holder_type' => is_string($value) ? $this->account_holder_type = \StripeSDK\Enums\V1\Tokens\Post\BankAccount\HolderTypeEnum::from($value) : parent::assignMember($name, $value),
            'account_number' => is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'account_type' => is_string($value) ? $this->account_type = \StripeSDK\Enums\V1\Tokens\Post\BankAccount\AccountTypeEnum::from($value) : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'routing_number' => is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
