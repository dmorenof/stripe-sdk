<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions;

/**
 * payment_method_options_param
 */
final class KrCardRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\KrCard\CaptureMethodEnum $capture_method;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\KrCard\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\KrCard\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\KrCard\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
