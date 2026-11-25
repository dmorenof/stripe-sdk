<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Shipping
 */
final class Shipping extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'carrier' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
        'tracking_number' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Address $address;
    /**
     * The delivery service that shipped a physical product, such as Fedex, UPS, USPS, etc.
     */
    public ?string $carrier {
        set {
            $this->assigning('carrier', $value);
            $this->carrier = $value;
        }
    }
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
    /**
     * The tracking number for a physical product, obtained from the delivery service. If multiple tracking numbers were generated for this purchase, please separate them with commas.
     */
    public ?string $tracking_number {
        set {
            $this->assigning('tracking_number', $value);
            $this->tracking_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value instanceof \stdClass ? $this->address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'carrier' => $value === null || is_string($value) ? $this->carrier = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'tracking_number' => $value === null || is_string($value) ? $this->tracking_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
