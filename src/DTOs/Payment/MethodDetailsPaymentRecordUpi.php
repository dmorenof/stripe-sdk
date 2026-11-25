<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_upi
 */
final class MethodDetailsPaymentRecordUpi extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'vpa' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Customer's unique Virtual Payment Address.
     */
    public ?string $vpa {
        set {
            $this->assigning('vpa', $value);
            $this->vpa = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'vpa' => $value === null || is_string($value) ? $this->vpa = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
