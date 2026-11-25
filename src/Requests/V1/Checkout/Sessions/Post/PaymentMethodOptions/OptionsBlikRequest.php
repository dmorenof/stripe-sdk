<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions;

/**
 * payment_method_options_param
 */
final class OptionsBlikRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\Blik\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Blik\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Blik\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
