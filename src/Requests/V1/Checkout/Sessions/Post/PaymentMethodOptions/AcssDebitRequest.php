<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions;

/**
 * payment_method_options_param
 */
final class AcssDebitRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'target_date' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\DebitCurrencyEnum $currency;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\FutureUsageEnum $setup_future_usage;
    public string $target_date {
        set {
            $this->assigning('target_date', $value);
            $this->target_date = $value;
        }
    }
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\VerificationMethodEnum $verification_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\DebitCurrencyEnum::from($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'target_date' => is_string($value) ? $this->target_date = $value : parent::assignMember($name, $value),
            'verification_method' => is_string($value) ? $this->verification_method = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\VerificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
