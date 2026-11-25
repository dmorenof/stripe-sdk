<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_au_becs_debit
 */
final class MethodDetailsPaymentRecordAuBecsDebit extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'bsb_number' => [
            'maxLength' => 5000,
        ],
        'expected_debit_date' => [
            'maxLength' => 5000,
        ],
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'mandate' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Bank-State-Branch number of the bank account.
     */
    public ?string $bsb_number {
        set {
            $this->assigning('bsb_number', $value);
            $this->bsb_number = $value;
        }
    }
    /**
     * Estimated date to debit the customer's bank account. A date string in YYYY-MM-DD format.
     */
    public string $expected_debit_date {
        set {
            $this->assigning('expected_debit_date', $value);
            $this->expected_debit_date = $value;
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
     * ID of the mandate used to make this payment.
     */
    public string $mandate {
        set {
            $this->assigning('mandate', $value);
            $this->mandate = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bsb_number' => $value === null || is_string($value) ? $this->bsb_number = $value : parent::assignMember($name, $value),
            'expected_debit_date' => is_string($value) ? $this->expected_debit_date = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
