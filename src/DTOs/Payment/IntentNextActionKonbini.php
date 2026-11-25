<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_intent_next_action_konbini
 */
final class IntentNextActionKonbini extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'expires_at',
        'stores',
    ];

    protected const array VALIDATION = [
        'hosted_voucher_url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The timestamp at which the pending Konbini payment expires.
     * Format: unix-time
     */
    public int $expires_at;
    /**
     * The URL for the Konbini payment instructions page, which allows customers to view and print a Konbini voucher.
     */
    public ?string $hosted_voucher_url {
        set {
            $this->assigning('hosted_voucher_url', $value);
            $this->hosted_voucher_url = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\IntentNextActionKonbiniStores $stores;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'hosted_voucher_url' => $value === null || is_string($value) ? $this->hosted_voucher_url = $value : parent::assignMember($name, $value),
            'stores' => $value instanceof \stdClass ? $this->stores = new \StripeSDK\DTOs\Payment\IntentNextActionKonbiniStores($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
