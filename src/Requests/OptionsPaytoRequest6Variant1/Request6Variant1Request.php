<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsPaytoRequest6Variant1;

/**
 * payment_intent_payment_method_options_param
 */
final class Request6Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\OptionsPaytoRequest6Variant1\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Enums\OptionsPaytoRequest6Variant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsPaytoRequest6Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
