<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * invoice_payment_method_options_param
 */
final class Request9Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\BankAccountRequest9Variant1\FinancialConnectionsRequest $financial_connections;
    public \StripeSDK\Enums\BankAccountRequest9Variant1\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\BankAccountRequest9Variant1\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
