<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * payment_method_options_param
 */
final class Request20Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\BankAccountRequest20Variant1\BankAccountRequest20Variant1NetworkEnum $network;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\BankAccountRequest20Variant1\BankAccountRequest20Variant1NetworkEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
