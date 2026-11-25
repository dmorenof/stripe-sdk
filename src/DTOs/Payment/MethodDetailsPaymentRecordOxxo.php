<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_oxxo
 */
final class MethodDetailsPaymentRecordOxxo extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * OXXO reference number
     */
    public ?string $number {
        set {
            $this->assigning('number', $value);
            $this->number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'number' => $value === null || is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
