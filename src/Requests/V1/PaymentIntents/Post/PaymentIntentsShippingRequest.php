<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post;

/**
 * optional_fields_shipping
 *
 * Shipping information for this PaymentIntent.
 */
final class PaymentIntentsShippingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
        'name',
    ];

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

    public \StripeSDK\Requests\V1\PaymentIntents\Post\Shipping\ShippingAddressRequest $address;
    public string $carrier {
        set {
            $this->assigning('carrier', $value);
            $this->carrier = $value;
        }
    }
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }
    public string $tracking_number {
        set {
            $this->assigning('tracking_number', $value);
            $this->tracking_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'carrier' => is_string($value) ? $this->carrier = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'tracking_number' => is_string($value) ? $this->tracking_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
