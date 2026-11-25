<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData;

/**
 * param
 */
final class NaverPayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodData\NaverPay\PayFundingEnum $funding;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'funding' => is_string($value) ? $this->funding = \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodData\NaverPay\PayFundingEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
