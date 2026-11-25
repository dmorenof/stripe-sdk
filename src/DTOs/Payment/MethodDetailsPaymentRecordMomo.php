<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_momo
 */
final class MethodDetailsPaymentRecordMomo extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'mandate' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Uniquely identifies this particular MoMo account. You can use this attribute to check whether two MoMo accounts are the same.
     */
    public ?string $fingerprint {
        set {
            $this->assigning('fingerprint', $value);
            $this->fingerprint = $value;
        }
    }
    /**
     * ID of the multi-use Mandate created by, or used to make, this MoMo payment.
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
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
