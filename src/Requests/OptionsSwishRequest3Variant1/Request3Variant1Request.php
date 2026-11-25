<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsSwishRequest3Variant1;

/**
 * payment_intent_payment_method_options_param
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\OptionsSwishRequest3Variant1\OptionsSwishRequest3Variant1ReferenceRequest $reference;
    public \StripeSDK\Enums\OptionsSwishRequest3Variant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsSwishRequest3Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
