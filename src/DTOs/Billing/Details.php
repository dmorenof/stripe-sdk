<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * billing_details
 */
final class Details extends \Dmorenof\SdkRuntime\DTO
{
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
        'tax_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Billing address.
     */
    public ?\StripeSDK\DTOs\Address $address;
    /**
     * Email address.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * Full name.
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Billing phone number (including extension).
     */
    public ?string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }
    /**
     * Taxpayer identification number. Used only for transactions between LATAM buyers and non-LATAM sellers.
     */
    public ?string $tax_id {
        set {
            $this->assigning('tax_id', $value);
            $this->tax_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value === null || $value instanceof \stdClass ? $this->address = $value === null ? null : new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'tax_id' => $value === null || is_string($value) ? $this->tax_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
