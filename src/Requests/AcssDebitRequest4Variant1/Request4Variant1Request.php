<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AcssDebitRequest4Variant1;

/**
 * invoice_payment_method_options_param
 */
final class Request4Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\AcssDebitRequest4Variant1\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Enums\AcssDebitRequest4Variant1\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\AcssDebitRequest4Variant1\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
