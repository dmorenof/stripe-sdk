<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * payment_method_options_param
 */
final class P24Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\OptionsP24RequestVariant1\FutureUsageEnum $setup_future_usage;
    public bool $tos_shown_and_accepted;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsP24RequestVariant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'tos_shown_and_accepted' => is_bool($value) ? $this->tos_shown_and_accepted = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
