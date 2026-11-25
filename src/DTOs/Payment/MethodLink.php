<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_link
 */
final class MethodLink extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'email' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Account owner's email address.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
