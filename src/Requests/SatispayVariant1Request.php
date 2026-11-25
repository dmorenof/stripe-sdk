<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * payment_method_options_param
 */
final class SatispayVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\OptionsSatispayRequestVariant1\CaptureMethodEnum $capture_method;
    public \StripeSDK\Enums\OptionsSatispayRequestVariant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\OptionsSatispayRequestVariant1\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsSatispayRequestVariant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
