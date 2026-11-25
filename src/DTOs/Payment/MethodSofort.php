<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_sofort
 */
final class MethodSofort extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Two-letter ISO code representing the country the bank account is located in.
     */
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
