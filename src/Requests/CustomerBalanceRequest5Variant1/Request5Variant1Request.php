<?php

declare(strict_types=1);

namespace StripeSDK\Requests\CustomerBalanceRequest5Variant1;

/**
 * payment_intent_payment_method_options_param
 */
final class Request5Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\CustomerBalanceRequest5Variant1\BankTransferRequest $bank_transfer;
    public \StripeSDK\Enums\CustomerBalanceRequest5Variant1\FundingTypeEnum $funding_type;
    public \StripeSDK\Enums\CustomerBalanceRequest5Variant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'funding_type' => is_string($value) ? $this->funding_type = \StripeSDK\Enums\CustomerBalanceRequest5Variant1\FundingTypeEnum::from($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\CustomerBalanceRequest5Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
