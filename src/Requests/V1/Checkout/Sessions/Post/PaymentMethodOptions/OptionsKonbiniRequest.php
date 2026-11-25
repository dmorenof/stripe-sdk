<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions;

/**
 * payment_method_options_param
 */
final class OptionsKonbiniRequest extends \Dmorenof\SdkRuntime\DTO
{
    public int $expires_after_days;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Konbini\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_after_days' => is_int($value) ? $this->expires_after_days = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Konbini\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
