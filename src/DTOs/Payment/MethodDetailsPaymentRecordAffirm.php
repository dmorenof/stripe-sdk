<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_affirm
 */
final class MethodDetailsPaymentRecordAffirm extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'location' => [
            'maxLength' => 5000,
        ],
        'reader' => [
            'maxLength' => 5000,
        ],
        'transaction_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * ID of the location that this reader is assigned to.
     */
    public string $location {
        set {
            $this->assigning('location', $value);
            $this->location = $value;
        }
    }
    /**
     * ID of the reader this transaction was made on.
     */
    public string $reader {
        set {
            $this->assigning('reader', $value);
            $this->reader = $value;
        }
    }
    /**
     * The Affirm transaction ID associated with this payment.
     */
    public ?string $transaction_id {
        set {
            $this->assigning('transaction_id', $value);
            $this->transaction_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'location' => is_string($value) ? $this->location = $value : parent::assignMember($name, $value),
            'reader' => is_string($value) ? $this->reader = $value : parent::assignMember($name, $value),
            'transaction_id' => $value === null || is_string($value) ? $this->transaction_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
