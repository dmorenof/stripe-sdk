<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * payment_method_options_param
 */
final class MultibancoVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\OptionsMultibancoRequestVariant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsMultibancoRequestVariant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
