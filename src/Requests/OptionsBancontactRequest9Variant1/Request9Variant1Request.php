<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsBancontactRequest9Variant1;

/**
 * invoice_payment_method_options_param
 */
final class Request9Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\OptionsBancontactRequest9Variant1\PreferredLanguageEnum $preferred_language;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'preferred_language' => is_string($value) ? $this->preferred_language = \StripeSDK\Enums\OptionsBancontactRequest9Variant1\PreferredLanguageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
