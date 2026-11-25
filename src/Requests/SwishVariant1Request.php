<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * payment_intent_payment_method_options_param
 */
final class SwishVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\OptionsSwishRequestVariant1\OptionsSwishRequestVariant1ReferenceRequest $reference;
    public \StripeSDK\Enums\OptionsSwishRequestVariant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsSwishRequestVariant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
