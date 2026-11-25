<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Billing Detail
 *
 * Billing details used by the customer for this payment.
 */
final class PaymentsPrimitivesPaymentRecordsResourceBillingDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
    ];

    protected const array VALIDATION = [
        'email' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAddress $address;
    /**
     * The billing email associated with the method of payment.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * The billing name associated with the method of payment.
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The billing phone number associated with the method of payment.
     */
    public ?string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value instanceof \stdClass ? $this->address = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAddress($value) : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
