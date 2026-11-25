<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\CustomerSessions\Post\Components\MobilePaymentElement;

/**
 * features_param
 */
final class ElementFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\CustomerSessions\Post\Components\MobilePaymentElement\Features\RedisplayFiltersCollection $payment_method_allow_redisplay_filters;
    public \StripeSDK\Enums\V1\CustomerSessions\Post\Components\MobilePaymentElement\Features\MethodRedisplayEnum $payment_method_redisplay;
    public \StripeSDK\Enums\V1\CustomerSessions\Post\Components\MobilePaymentElement\Features\MethodRemoveEnum $payment_method_remove;
    public \StripeSDK\Enums\V1\CustomerSessions\Post\Components\MobilePaymentElement\Features\MethodSaveEnum $payment_method_save;
    public \StripeSDK\Enums\V1\CustomerSessions\Post\Components\MobilePaymentElement\Features\RedisplayOverrideEnum $payment_method_save_allow_redisplay_override;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_method_redisplay' => is_string($value) ? $this->payment_method_redisplay = \StripeSDK\Enums\V1\CustomerSessions\Post\Components\MobilePaymentElement\Features\MethodRedisplayEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_remove' => is_string($value) ? $this->payment_method_remove = \StripeSDK\Enums\V1\CustomerSessions\Post\Components\MobilePaymentElement\Features\MethodRemoveEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_save' => is_string($value) ? $this->payment_method_save = \StripeSDK\Enums\V1\CustomerSessions\Post\Components\MobilePaymentElement\Features\MethodSaveEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_save_allow_redisplay_override' => is_string($value) ? $this->payment_method_save_allow_redisplay_override = \StripeSDK\Enums\V1\CustomerSessions\Post\Components\MobilePaymentElement\Features\RedisplayOverrideEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
