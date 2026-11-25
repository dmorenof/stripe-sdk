<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountUnificationAccountControllerLosses
 */
final class UnificationAccountControllerLosses extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payments',
    ];

    /**
     * A value indicating who is liable when this account can't pay back negative balances from payments.
     */
    public \StripeSDK\Enums\Account\UnificationAccountControllerLosses\PaymentsEnum $payments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payments' => is_string($value) ? $this->payments = \StripeSDK\Enums\Account\UnificationAccountControllerLosses\PaymentsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
