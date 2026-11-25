<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * invoice_payment_method_options_param
 */
final class DebitVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\AcssDebitRequestVariant1\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Enums\AcssDebitRequestVariant1\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\AcssDebitRequestVariant1\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
