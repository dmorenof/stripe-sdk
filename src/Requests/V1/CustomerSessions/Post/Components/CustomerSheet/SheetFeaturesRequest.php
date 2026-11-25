<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\CustomerSessions\Post\Components\CustomerSheet;

/**
 * features_param
 */
final class SheetFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\CustomerSessions\Post\Components\CustomerSheet\Features\RedisplayFiltersCollection $payment_method_allow_redisplay_filters;
    public \StripeSDK\Enums\V1\CustomerSessions\Post\Components\CustomerSheet\Features\MethodRemoveEnum $payment_method_remove;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_method_remove' => is_string($value) ? $this->payment_method_remove = \StripeSDK\Enums\V1\CustomerSessions\Post\Components\CustomerSheet\Features\MethodRemoveEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
