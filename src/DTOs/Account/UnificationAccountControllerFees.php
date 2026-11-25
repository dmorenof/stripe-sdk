<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountUnificationAccountControllerFees
 */
final class UnificationAccountControllerFees extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payer',
    ];

    /**
     * A value indicating the responsible payer of a bundle of Stripe fees for pricing-control eligible products on this account. Learn more about [fee behavior on connected accounts](https://docs.stripe.com/connect/direct-charges-fee-payer-behavior).
     */
    public \StripeSDK\Enums\Account\UnificationAccountControllerFees\PayerEnum $payer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payer' => is_string($value) ? $this->payer = \StripeSDK\Enums\Account\UnificationAccountControllerFees\PayerEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
