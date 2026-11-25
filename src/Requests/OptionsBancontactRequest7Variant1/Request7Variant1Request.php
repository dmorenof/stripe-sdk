<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsBancontactRequest7Variant1;

/**
 * payment_method_options_param
 */
final class Request7Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\OptionsBancontactRequest7Variant1\PreferredLanguageEnum $preferred_language;
    public \StripeSDK\Enums\OptionsBancontactRequest7Variant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'preferred_language' => is_string($value) ? $this->preferred_language = \StripeSDK\Enums\OptionsBancontactRequest7Variant1\PreferredLanguageEnum::from($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsBancontactRequest7Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
