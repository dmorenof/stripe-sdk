<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionCustomTextPosition
 */
final class PagesCheckoutSessionCustomTextPosition extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    protected const array VALIDATION = [
        'message' => [
            'maxLength' => 1200,
        ],
    ];

    /**
     * Text can be up to 1200 characters in length.
     */
    public string $message {
        set {
            $this->assigning('message', $value);
            $this->message = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
