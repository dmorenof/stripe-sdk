<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * customer_payment_source_bank_account
 */
final class Request5Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_number',
        'country',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
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
        'country' => [
            'maxLength' => 5000,
        ],
        'object_' => [
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
    public \StripeSDK\Enums\BankAccountRequest5Variant1\HolderTypeEnum $account_holder_type {
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
    public \StripeSDK\Enums\BankAccountRequest5Variant1\BankAccountRequest5Variant1ObjectEnum $object_ {
        set {
            $this->assigning('object_', $value);
            $this->object_ = $value;
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
            'account_holder_type' => is_string($value) ? $this->account_holder_type = \StripeSDK\Enums\BankAccountRequest5Variant1\HolderTypeEnum::from($value) : parent::assignMember($name, $value),
            'account_number' => is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\BankAccountRequest5Variant1\BankAccountRequest5Variant1ObjectEnum::from($value) : parent::assignMember($name, $value),
            'routing_number' => is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
