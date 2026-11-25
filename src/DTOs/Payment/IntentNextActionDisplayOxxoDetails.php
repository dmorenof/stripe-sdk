<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextActionDisplayOxxoDetails
 */
final class IntentNextActionDisplayOxxoDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'hosted_voucher_url' => [
            'maxLength' => 5000,
        ],
        'number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The timestamp after which the OXXO voucher expires.
     * Format: unix-time
     */
    public ?int $expires_after;
    /**
     * The URL for the hosted OXXO voucher page, which allows customers to view and print an OXXO voucher.
     */
    public ?string $hosted_voucher_url {
        set {
            $this->assigning('hosted_voucher_url', $value);
            $this->hosted_voucher_url = $value;
        }
    }
    /**
     * OXXO reference number.
     */
    public ?string $number {
        set {
            $this->assigning('number', $value);
            $this->number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_after' => $value === null || is_int($value) ? $this->expires_after = $value : parent::assignMember($name, $value),
            'hosted_voucher_url' => $value === null || is_string($value) ? $this->hosted_voucher_url = $value : parent::assignMember($name, $value),
            'number' => $value === null || is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
