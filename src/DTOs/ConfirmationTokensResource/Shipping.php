<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConfirmationTokensResource;

/**
 * Shipping
 */
final class Shipping extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
        'name',
    ];

    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Address $address;
    /**
     * Recipient name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Recipient phone (including extension).
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
            'address' => $value instanceof \stdClass ? $this->address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
