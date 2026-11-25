<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_card_wallet_visa_checkout
 */
final class MethodCardWalletVisaCheckout extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'email' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Owner's verified billing address. Values are verified or provided by the wallet directly (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     */
    public ?\StripeSDK\DTOs\Address $billing_address;
    /**
     * Owner's verified email. Values are verified or provided by the wallet directly (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * Owner's verified full name. Values are verified or provided by the wallet directly (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Owner's verified shipping address. Values are verified or provided by the wallet directly (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     */
    public ?\StripeSDK\DTOs\Address $shipping_address;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_address' => $value === null || $value instanceof \stdClass ? $this->billing_address = $value === null ? null : new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'shipping_address' => $value === null || $value instanceof \stdClass ? $this->shipping_address = $value === null ? null : new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
