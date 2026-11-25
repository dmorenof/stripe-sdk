<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * payment_intent_payment_method_options_param
 */
final class Request17Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'target_date' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\BankAccountRequest17Variant1\FinancialConnectionsRequest $financial_connections;
    public \StripeSDK\Requests\BankAccountRequest17Variant1\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Requests\BankAccountRequest17Variant1\BankAccountRequest17Variant1NetworksRequest $networks;
    public \StripeSDK\Enums\BankAccountRequest17Variant1\FutureUsageEnum $setup_future_usage;
    public string $target_date {
        set {
            $this->assigning('target_date', $value);
            $this->target_date = $value;
        }
    }
    public \StripeSDK\Enums\BankAccountRequest17Variant1\TransactionPurposeEnum $transaction_purpose;
    public \StripeSDK\Enums\BankAccountRequest17Variant1\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\BankAccountRequest17Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'target_date' => is_string($value) ? $this->target_date = $value : parent::assignMember($name, $value),
            'transaction_purpose' => is_string($value) ? $this->transaction_purpose = \StripeSDK\Enums\BankAccountRequest17Variant1\TransactionPurposeEnum::from($value) : parent::assignMember($name, $value),
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\BankAccountRequest17Variant1\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
