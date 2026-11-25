<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsCardRequest3Variant1;

/**
 * invoice_payment_method_options_param
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\OptionsCardRequest3Variant1\OptionsCardRequest3Variant1InstallmentsRequest $installments;
    public \StripeSDK\Enums\OptionsCardRequest3Variant1\DSecureEnum $request_three_d_secure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'request_three_d_secure' => is_string($value) ? $this->request_three_d_secure = \StripeSDK\Enums\OptionsCardRequest3Variant1\DSecureEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
