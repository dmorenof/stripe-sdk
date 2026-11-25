<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_intent_next_action_konbini_ministop
 */
final class IntentNextActionKonbiniMinistop extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_code',
    ];

    protected const array VALIDATION = [
        'confirmation_number' => [
            'maxLength' => 5000,
        ],
        'payment_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The confirmation number.
     */
    public string $confirmation_number {
        set {
            $this->assigning('confirmation_number', $value);
            $this->confirmation_number = $value;
        }
    }
    /**
     * The payment code.
     */
    public string $payment_code {
        set {
            $this->assigning('payment_code', $value);
            $this->payment_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'confirmation_number' => is_string($value) ? $this->confirmation_number = $value : parent::assignMember($name, $value),
            'payment_code' => is_string($value) ? $this->payment_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
