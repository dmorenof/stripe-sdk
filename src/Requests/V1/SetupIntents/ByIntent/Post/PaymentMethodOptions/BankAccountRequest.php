<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions;

/**
 * setup_intent_payment_method_options_param
 */
final class BankAccountRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\UsBankAccount\FinancialConnectionsRequest $financial_connections;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\UsBankAccount\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\UsBankAccount\AccountNetworksRequest $networks;
    public \StripeSDK\Enums\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\UsBankAccount\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\UsBankAccount\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
