<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions;

/**
 * payment_method_options_param
 */
final class CustomerBalanceRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\CustomerBalance\BankTransferRequest $bank_transfer;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\CustomerBalance\FundingTypeEnum $funding_type;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\CustomerBalance\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'funding_type' => is_string($value) ? $this->funding_type = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\CustomerBalance\FundingTypeEnum::from($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\CustomerBalance\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
