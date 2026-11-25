<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_ach_debit
 */
final class MethodDetailsAchDebit extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'bank_name' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'routing_number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Type of entity that holds the account. This can be either `individual` or `company`.
     */
    public ?\StripeSDK\Enums\Payment\MethodDetailsAchDebit\HolderTypeEnum $account_holder_type;
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
     * Two-letter ISO code representing the country the bank account is located in.
     */
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
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
     * Routing transit number of the bank account.
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
            'account_holder_type' => $value === null || is_string($value) ? $this->account_holder_type = $value === null ? null : \StripeSDK\Enums\Payment\MethodDetailsAchDebit\HolderTypeEnum::from($value) : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'routing_number' => $value === null || is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
