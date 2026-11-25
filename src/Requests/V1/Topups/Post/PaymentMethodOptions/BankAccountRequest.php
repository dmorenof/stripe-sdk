<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Topups\Post\PaymentMethodOptions;

/**
 * us_bank_account_param
 */
final class BankAccountRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'network',
    ];

    public \StripeSDK\Enums\V1\Topups\Post\PaymentMethodOptions\UsBankAccount\AccountNetworkEnum $network;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\V1\Topups\Post\PaymentMethodOptions\UsBankAccount\AccountNetworkEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
