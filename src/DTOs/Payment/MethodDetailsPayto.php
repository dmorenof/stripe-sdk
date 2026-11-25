<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payto
 */
final class MethodDetailsPayto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'bsb_number' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'mandate' => [
            'maxLength' => 5000,
        ],
        'pay_id' => [
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
    /**
     * The PayID alias for the bank account.
     */
    public ?string $pay_id {
        set {
            $this->assigning('pay_id', $value);
            $this->pay_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bsb_number' => $value === null || is_string($value) ? $this->bsb_number = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            'pay_id' => $value === null || is_string($value) ? $this->pay_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
