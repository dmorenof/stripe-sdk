<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_acss_debit
 */
final class MethodAcssDebit extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'bank_name' => [
            'maxLength' => 5000,
        ],
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'institution_number' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'transit_number' => [
            'maxLength' => 5000,
        ],
    ];

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
     * Uniquely identifies this particular bank account. You can use this attribute to check whether two bank accounts are the same.
     */
    public ?string $fingerprint {
        set {
            $this->assigning('fingerprint', $value);
            $this->fingerprint = $value;
        }
    }
    /**
     * Institution number of the bank account.
     */
    public ?string $institution_number {
        set {
            $this->assigning('institution_number', $value);
            $this->institution_number = $value;
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
     * Transit number of the bank account.
     */
    public ?string $transit_number {
        set {
            $this->assigning('transit_number', $value);
            $this->transit_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'institution_number' => $value === null || is_string($value) ? $this->institution_number = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'transit_number' => $value === null || is_string($value) ? $this->transit_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
