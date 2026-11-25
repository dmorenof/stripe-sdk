<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Shipping Detail
 *
 * The customer's shipping information associated with this payment.
 */
final class PaymentsPrimitivesPaymentRecordsResourceShippingDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
    ];

    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAddress $address;
    /**
     * The shipping recipient's name.
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The shipping recipient's phone number.
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
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
