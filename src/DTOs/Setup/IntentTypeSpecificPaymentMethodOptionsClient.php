<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * SetupIntentTypeSpecificPaymentMethodOptionsClient
 */
final class IntentTypeSpecificPaymentMethodOptionsClient extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptionsMandateOptionsPayto $mandate_options;
    /**
     * Bank account verification method. The default value is `automatic`.
     */
    public \StripeSDK\Enums\Setup\IntentTypeSpecificPaymentMethodOptionsClient\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_options' => $value instanceof \stdClass ? $this->mandate_options = new \StripeSDK\DTOs\Setup\IntentPaymentMethodOptionsMandateOptionsPayto($value) : parent::assignMember($name, $value),
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\Setup\IntentTypeSpecificPaymentMethodOptionsClient\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
