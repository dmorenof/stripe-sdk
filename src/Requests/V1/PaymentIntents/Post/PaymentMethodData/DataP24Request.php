<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData;

/**
 * param
 */
final class DataP24Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\PaymentIntents\Post\PaymentMethodData\P24\P24BankEnum $bank;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank' => is_string($value) ? $this->bank = \StripeSDK\Enums\V1\PaymentIntents\Post\PaymentMethodData\P24\P24BankEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
