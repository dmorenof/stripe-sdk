<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsPixRequest4Variant1;

/**
 * invoice_payment_method_options_param
 */
final class Request4Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\OptionsPixRequest4Variant1\IncludesIofEnum $amount_includes_iof;
    public int $expires_after_seconds;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_includes_iof' => is_string($value) ? $this->amount_includes_iof = \StripeSDK\Enums\OptionsPixRequest4Variant1\IncludesIofEnum::from($value) : parent::assignMember($name, $value),
            'expires_after_seconds' => is_int($value) ? $this->expires_after_seconds = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
