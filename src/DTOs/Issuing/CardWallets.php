<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardWallets
 */
final class CardWallets extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'apple_pay',
        'google_pay',
    ];

    protected const array VALIDATION = [
        'primary_account_identifier' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Issuing\CardApplePay $apple_pay;
    public \StripeSDK\DTOs\Issuing\CardGooglePay $google_pay;
    /**
     * Unique identifier for a card used with digital wallets
     */
    public ?string $primary_account_identifier {
        set {
            $this->assigning('primary_account_identifier', $value);
            $this->primary_account_identifier = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apple_pay' => $value instanceof \stdClass ? $this->apple_pay = new \StripeSDK\DTOs\Issuing\CardApplePay($value) : parent::assignMember($name, $value),
            'google_pay' => $value instanceof \stdClass ? $this->google_pay = new \StripeSDK\DTOs\Issuing\CardGooglePay($value) : parent::assignMember($name, $value),
            'primary_account_identifier' => $value === null || is_string($value) ? $this->primary_account_identifier = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
