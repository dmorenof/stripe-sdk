<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_bacs_debit
 */
final class MethodDetailsBacsDebit extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
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
        'sort_code' => [
            'maxLength' => 5000,
        ],
    ];

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
    public ?string $mandate {
        set {
            $this->assigning('mandate', $value);
            $this->mandate = $value;
        }
    }
    /**
     * Sort code of the bank account. (e.g., `10-20-30`)
     */
    public ?string $sort_code {
        set {
            $this->assigning('sort_code', $value);
            $this->sort_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expected_debit_date' => is_string($value) ? $this->expected_debit_date = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'mandate' => $value === null || is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            'sort_code' => $value === null || is_string($value) ? $this->sort_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
