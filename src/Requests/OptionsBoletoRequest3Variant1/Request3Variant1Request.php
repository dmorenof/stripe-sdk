<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsBoletoRequest3Variant1;

/**
 * payment_method_options_param
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public int $expires_after_days;
    public \StripeSDK\Enums\OptionsBoletoRequest3Variant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_after_days' => is_int($value) ? $this->expires_after_days = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsBoletoRequest3Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
