<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsBlikRequest5Variant1;

/**
 * payment_intent_payment_method_options_param
 */
final class Request5Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'code' => [
            'maxLength' => 5000,
        ],
    ];

    public string $code {
        set {
            $this->assigning('code', $value);
            $this->code = $value;
        }
    }
    public \StripeSDK\Requests\OptionsBlikRequest5Variant1\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Enums\OptionsBlikRequest5Variant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsBlikRequest5Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
