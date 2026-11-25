<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * invoice_payment_method_options_param
 */
final class Request10Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\BankAccountRequest10Variant1\FinancialConnectionsRequest $financial_connections;
    public \StripeSDK\Enums\BankAccountRequest10Variant1\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\BankAccountRequest10Variant1\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
