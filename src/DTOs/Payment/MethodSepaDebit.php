<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_sepa_debit
 */
final class MethodSepaDebit extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'bank_code' => [
            'maxLength' => 5000,
        ],
        'branch_code' => [
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
    ];

    /**
     * Bank code of bank associated with the bank account.
     */
    public ?string $bank_code {
        set {
            $this->assigning('bank_code', $value);
            $this->bank_code = $value;
        }
    }
    /**
     * Branch code of bank associated with the bank account.
     */
    public ?string $branch_code {
        set {
            $this->assigning('branch_code', $value);
            $this->branch_code = $value;
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
     * Information about the object that generated this PaymentMethod.
     */
    public ?\StripeSDK\DTOs\SepaDebitGeneratedFrom $generated_from;
    /**
     * Last four characters of the IBAN.
     */
    public ?string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_code' => $value === null || is_string($value) ? $this->bank_code = $value : parent::assignMember($name, $value),
            'branch_code' => $value === null || is_string($value) ? $this->branch_code = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'generated_from' => $value === null || $value instanceof \stdClass ? $this->generated_from = $value === null ? null : new \StripeSDK\DTOs\SepaDebitGeneratedFrom($value) : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
