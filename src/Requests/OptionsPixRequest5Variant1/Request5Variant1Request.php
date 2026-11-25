<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsPixRequest5Variant1;

/**
 * payment_method_options_param
 */
final class Request5Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\OptionsPixRequest5Variant1\IncludesIofEnum $amount_includes_iof;
    public int $expires_after_seconds;
    /**
     * Format: unix-time
     */
    public int $expires_at;
    public \StripeSDK\Requests\OptionsPixRequest5Variant1\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Enums\OptionsPixRequest5Variant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_includes_iof' => is_string($value) ? $this->amount_includes_iof = \StripeSDK\Enums\OptionsPixRequest5Variant1\IncludesIofEnum::from($value) : parent::assignMember($name, $value),
            'expires_after_seconds' => is_int($value) ? $this->expires_after_seconds = $value : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsPixRequest5Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
