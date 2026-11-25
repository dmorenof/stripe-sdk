<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsSofortRequest3Variant1;

/**
 * payment_method_options_param
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\OptionsSofortRequest3Variant1\PreferredLanguageEnum $preferred_language;
    public \StripeSDK\Enums\OptionsSofortRequest3Variant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'preferred_language' => is_string($value) ? $this->preferred_language = \StripeSDK\Enums\OptionsSofortRequest3Variant1\PreferredLanguageEnum::from($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsSofortRequest3Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
