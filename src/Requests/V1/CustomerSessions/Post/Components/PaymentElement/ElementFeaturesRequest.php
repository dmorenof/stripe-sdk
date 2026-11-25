<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\CustomerSessions\Post\Components\PaymentElement;

/**
 * features_param
 */
final class ElementFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\CustomerSessions\Post\Components\PaymentElement\Features\RedisplayFiltersCollection $payment_method_allow_redisplay_filters;
    public \StripeSDK\Enums\V1\CustomerSessions\Post\Components\PaymentElement\Features\MethodRedisplayEnum $payment_method_redisplay;
    public int $payment_method_redisplay_limit;
    public \StripeSDK\Enums\V1\CustomerSessions\Post\Components\PaymentElement\Features\MethodRemoveEnum $payment_method_remove;
    public \StripeSDK\Enums\V1\CustomerSessions\Post\Components\PaymentElement\Features\MethodSaveEnum $payment_method_save;
    public \StripeSDK\Enums\V1\CustomerSessions\Post\Components\PaymentElement\Features\SaveUsageEnum $payment_method_save_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_method_redisplay' => is_string($value) ? $this->payment_method_redisplay = \StripeSDK\Enums\V1\CustomerSessions\Post\Components\PaymentElement\Features\MethodRedisplayEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_redisplay_limit' => is_int($value) ? $this->payment_method_redisplay_limit = $value : parent::assignMember($name, $value),
            'payment_method_remove' => is_string($value) ? $this->payment_method_remove = \StripeSDK\Enums\V1\CustomerSessions\Post\Components\PaymentElement\Features\MethodRemoveEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_save' => is_string($value) ? $this->payment_method_save = \StripeSDK\Enums\V1\CustomerSessions\Post\Components\PaymentElement\Features\MethodSaveEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_save_usage' => is_string($value) ? $this->payment_method_save_usage = \StripeSDK\Enums\V1\CustomerSessions\Post\Components\PaymentElement\Features\SaveUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
