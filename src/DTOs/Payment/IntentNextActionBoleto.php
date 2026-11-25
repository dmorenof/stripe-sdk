<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_intent_next_action_boleto
 */
final class IntentNextActionBoleto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'hosted_voucher_url' => [
            'maxLength' => 5000,
        ],
        'number' => [
            'maxLength' => 5000,
        ],
        'pdf' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The timestamp after which the boleto expires.
     * Format: unix-time
     */
    public ?int $expires_at;
    /**
     * The URL to the hosted boleto voucher page, which allows customers to view the boleto voucher.
     */
    public ?string $hosted_voucher_url {
        set {
            $this->assigning('hosted_voucher_url', $value);
            $this->hosted_voucher_url = $value;
        }
    }
    /**
     * The boleto number.
     */
    public ?string $number {
        set {
            $this->assigning('number', $value);
            $this->number = $value;
        }
    }
    /**
     * The URL to the downloadable boleto voucher PDF.
     */
    public ?string $pdf {
        set {
            $this->assigning('pdf', $value);
            $this->pdf = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'hosted_voucher_url' => $value === null || is_string($value) ? $this->hosted_voucher_url = $value : parent::assignMember($name, $value),
            'number' => $value === null || is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'pdf' => $value === null || is_string($value) ? $this->pdf = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
