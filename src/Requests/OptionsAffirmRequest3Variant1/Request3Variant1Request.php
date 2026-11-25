<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsAffirmRequest3Variant1;

/**
 * payment_method_options_param
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'preferred_locale' => [
            'maxLength' => 30,
        ],
    ];

    public \StripeSDK\Enums\OptionsAffirmRequest3Variant1\CaptureMethodEnum $capture_method;
    public string $preferred_locale {
        set {
            $this->assigning('preferred_locale', $value);
            $this->preferred_locale = $value;
        }
    }
    public \StripeSDK\Enums\OptionsAffirmRequest3Variant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\OptionsAffirmRequest3Variant1\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'preferred_locale' => is_string($value) ? $this->preferred_locale = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsAffirmRequest3Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
