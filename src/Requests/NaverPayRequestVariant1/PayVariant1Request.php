<?php

declare(strict_types=1);

namespace StripeSDK\Requests\NaverPayRequestVariant1;

/**
 * payment_method_options_param
 */
final class PayVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\NaverPayRequestVariant1\CaptureMethodEnum $capture_method;
    public \StripeSDK\Enums\NaverPayRequestVariant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\NaverPayRequestVariant1\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\NaverPayRequestVariant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
