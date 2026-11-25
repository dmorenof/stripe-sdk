<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions;

/**
 * payment_method_options_param
 */
final class OptionsPixRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Pix\IncludesIofEnum $amount_includes_iof;
    public int $expires_after_seconds;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\Pix\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Pix\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_includes_iof' => is_string($value) ? $this->amount_includes_iof = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Pix\IncludesIofEnum::from($value) : parent::assignMember($name, $value),
            'expires_after_seconds' => is_int($value) ? $this->expires_after_seconds = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Pix\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
