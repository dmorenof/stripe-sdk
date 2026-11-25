<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_swish
 */
final class MethodDetailsSwish extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'payment_reference' => [
            'maxLength' => 5000,
        ],
        'verified_phone_last4' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Uniquely identifies the payer's Swish account. You can use this attribute to check whether two Swish transactions were paid for by the same payer
     */
    public ?string $fingerprint {
        set {
            $this->assigning('fingerprint', $value);
            $this->fingerprint = $value;
        }
    }
    /**
     * Payer bank reference number for the payment
     */
    public ?string $payment_reference {
        set {
            $this->assigning('payment_reference', $value);
            $this->payment_reference = $value;
        }
    }
    /**
     * The last four digits of the Swish account phone number
     */
    public ?string $verified_phone_last4 {
        set {
            $this->assigning('verified_phone_last4', $value);
            $this->verified_phone_last4 = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'payment_reference' => $value === null || is_string($value) ? $this->payment_reference = $value : parent::assignMember($name, $value),
            'verified_phone_last4' => $value === null || is_string($value) ? $this->verified_phone_last4 = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
