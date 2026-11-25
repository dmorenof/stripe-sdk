<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsPixRequest9Variant1;

/**
 * subscription_payment_method_options_param
 */
final class Request9Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public int $expires_after_seconds;
    public \StripeSDK\Requests\OptionsPixRequest9Variant1\MandateOptionsRequest $mandate_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_after_seconds' => is_int($value) ? $this->expires_after_seconds = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
