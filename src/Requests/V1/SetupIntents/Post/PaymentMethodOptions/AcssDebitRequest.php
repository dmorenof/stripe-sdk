<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions;

/**
 * setup_intent_payment_method_options_param
 */
final class AcssDebitRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\AcssDebit\DebitCurrencyEnum $currency;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions\AcssDebit\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\AcssDebit\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\AcssDebit\DebitCurrencyEnum::from($value) : parent::assignMember($name, $value),
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\AcssDebit\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
