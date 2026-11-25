<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsKlarnaRequest3Variant1;

/**
 * payment_method_options_param
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\OptionsKlarnaRequest3Variant1\CaptureMethodEnum $capture_method;
    public \StripeSDK\Requests\OptionsKlarnaRequest3Variant1\OnDemandRequest $on_demand;
    public \StripeSDK\Enums\OptionsKlarnaRequest3Variant1\PreferredLocaleEnum $preferred_locale;
    public \StripeSDK\Enums\OptionsKlarnaRequest3Variant1\FutureUsageEnum $setup_future_usage;
    public \StripeSDK\Requests\OptionsKlarnaRequest3Variant1\OptionsKlarnaRequest3Variant1SubscriptionsRequest $subscriptions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\OptionsKlarnaRequest3Variant1\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'preferred_locale' => is_string($value) ? $this->preferred_locale = \StripeSDK\Enums\OptionsKlarnaRequest3Variant1\PreferredLocaleEnum::from($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsKlarnaRequest3Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
