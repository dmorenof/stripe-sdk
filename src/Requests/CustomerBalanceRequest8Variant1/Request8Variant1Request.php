<?php

declare(strict_types=1);

namespace StripeSDK\Requests\CustomerBalanceRequest8Variant1;

/**
 * invoice_payment_method_options_param
 */
final class Request8Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\CustomerBalanceRequest8Variant1\BankTransferRequest $bank_transfer;
    public string $funding_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'funding_type' => is_string($value) ? $this->funding_type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
