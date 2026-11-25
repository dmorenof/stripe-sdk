<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_alma
 */
final class MethodDetailsPaymentRecordAlma extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'transaction_id' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\AlmaDetailsResourceInstallments $installments;
    /**
     * The Alma transaction ID associated with this payment.
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
            'installments' => $value instanceof \stdClass ? $this->installments = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\AlmaDetailsResourceInstallments($value) : parent::assignMember($name, $value),
            'transaction_id' => $value === null || is_string($value) ? $this->transaction_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
