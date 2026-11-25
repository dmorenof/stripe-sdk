<?php

declare(strict_types=1);

namespace StripeSDK\Requests\WechatPayRequest3Variant1;

/**
 * payment_method_options_param
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'app_id' => [
            'maxLength' => 5000,
        ],
    ];

    public string $app_id {
        set {
            $this->assigning('app_id', $value);
            $this->app_id = $value;
        }
    }
    public \StripeSDK\Enums\WechatPayRequest3Variant1\WechatPayRequest3Variant1ClientEnum $client;
    public \StripeSDK\Enums\WechatPayRequest3Variant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'app_id' => is_string($value) ? $this->app_id = $value : parent::assignMember($name, $value),
            'client' => is_string($value) ? $this->client = \StripeSDK\Enums\WechatPayRequest3Variant1\WechatPayRequest3Variant1ClientEnum::from($value) : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\WechatPayRequest3Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
